<?php
include_once('verifica.php');
include_once('bd.php');

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $questao_id = $_POST['questao'];
    $respostas = $_POST['respostas'];
    $usuario_id = $_SESSION['usuario_id'];  // Assumindo que o ID do usuário está armazenado na sessão

    // Consulta as alternativas da questão
    $sql = "SELECT * FROM alternativas WHERE questao_id = :questao_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':questao_id', $questao_id, PDO::PARAM_INT);
    $stmt->execute();
    $alternativas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Array para armazenar os resultados
    $resultados = [];
    $pontos_ganhos = 0;

    foreach ($alternativas as $alternativa) {
        $id = $alternativa['id'];
        $texto = $alternativa['texto'];
        $resposta_correta = $alternativa['resposta'];
        $resposta_usuario = isset($respostas[$id]) ? $respostas[$id] : null;
        $acertou = ($resposta_correta == $resposta_usuario) ? 1 : 0;

        // Adiciona os dados ao array de resultados
        $resultados[] = [
            'id' => $id,
            'texto' => $texto,
            'resposta_usuario' => $resposta_usuario,
            'resposta_correta' => $resposta_correta,
            'acertou' => $acertou
        ];

        // Soma 100 pontos para cada resposta correta
        if ($acertou) {
            $pontos_ganhos += 100;
        }
    }

    // Recupera a pontuação atual do usuário
    $sql = "SELECT pontuacao FROM alunos WHERE id = :usuario_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
    $stmt->execute();
    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
    $pontos_atuais = $usuario['pontuacao'];

    if ($usuario) {
        // Calcula a nova pontuação
        $nova_pontuacao = $pontos_atuais + $pontos_ganhos;

        // Atualiza a pontuação do usuário no banco de dados
        $sql = "UPDATE alunos SET pontuacao = :nova_pontuacao WHERE id = :usuario_id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nova_pontuacao', $nova_pontuacao, PDO::PARAM_INT);
        $stmt->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
        $stmt->execute();
    }

    $sql = "SELECT * FROM questoes WHERE id = :questao_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':questao_id', $questao_id, PDO::PARAM_INT);
    $stmt->execute();
    $questao = $stmt->fetch();

    $_SESSION['resultado'] = $resultados;
    $_SESSION['questao'] = $questao;
    $_SESSION['pontuacao_rodada'] = $pontos_ganhos;
    $_SESSION['pontuacao'] = isset($nova_pontuacao) ? $nova_pontuacao : $pontos_atuais;

    header("Location: views/feedback.php");

} else {
    header("Location: views/home.php");
}
?>
