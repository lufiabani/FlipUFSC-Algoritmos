<?php
include_once('verifica.php');
include_once('bd.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $questao_id = $_POST['questao'];
    $respostas = $_POST['respostas'];
    $usuario_id = $_SESSION['usuario_id'];

    $sql = "SELECT * FROM alternativas WHERE questao_id = :questao_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':questao_id', $questao_id, PDO::PARAM_INT);
    $stmt->execute();
    $alternativas = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $resultados = [];
    $pontos_ganhos = 0;

    foreach ($alternativas as $alternativa) {
        $id = $alternativa['id'];
        $texto = $alternativa['texto'];
        $resposta_correta = $alternativa['resposta'];
        $resposta_usuario = isset($respostas[$id]) ? $respostas[$id] : null;
        $acertou = ($resposta_correta == $resposta_usuario) ? 1 : 0;

        $resultados[] = [
            'id' => $id,
            'texto' => $texto,
            'resposta_usuario' => $resposta_usuario,
            'resposta_correta' => $resposta_correta,
            'acertou' => $acertou
        ];

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

    $nova_pontuacao = $pontos_atuais + $pontos_ganhos;

    // Atualiza a pontuação do usuário no banco de dados
    $sql = "UPDATE alunos SET pontuacao = :nova_pontuacao WHERE id = :usuario_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':nova_pontuacao', $nova_pontuacao, PDO::PARAM_INT);
    $stmt->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
    $stmt->execute();

    // Registra a rodada
    $dataHoraAtual = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
    $datahora = $dataHoraAtual->format('Y-m-d H:i:s');

    $sql = "INSERT INTO rodadas (datahora, aluno_id, questao_id, pontuacao) VALUES (:datahora, :aluno_id, :questao_id, :pontuacao)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':datahora', $datahora, PDO::PARAM_STR);
    $stmt->bindParam(':aluno_id', $usuario_id, PDO::PARAM_INT);
    $stmt->bindParam(':questao_id', $questao_id, PDO::PARAM_INT);
    $stmt->bindParam(':pontuacao', $pontos_ganhos, PDO::PARAM_INT);
    $stmt->execute();

    $sql = "SELECT * FROM questoes WHERE id = :questao_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':questao_id', $questao_id, PDO::PARAM_INT);
    $stmt->execute();
    $questao = $stmt->fetch();

    $_SESSION['resultado'] = $resultados;
    $_SESSION['questao'] = $questao;
    $_SESSION['pontuacao_rodada'] = $pontos_ganhos;
    $_SESSION['pontuacao'] = $nova_pontuacao;

    header("Location: views/feedback.php");
} else {
    header("Location: views/home.php");
}
