<?php

include_once('bd.php');
include_once('verifica.php');

$usuario_id = $_SESSION['usuario_id'];

$sql_jogadas = "SELECT * FROM rodadas WHERE aluno_id = :usuario_id AND DATE(datahora) = CURDATE()";
$stmt_jogadas = $pdo->prepare($sql_jogadas);
$stmt_jogadas->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
$stmt_jogadas->execute();
$resultado_jogadas = $stmt_jogadas->fetchAll(PDO::FETCH_ASSOC);

if (count($resultado_jogadas) >= 2) {
    echo '<script>
        alert("Você atingiu o limite de jogadas hoje, volte amanhã!");
        window.location.href = "../logout.php";
    </script>';
    exit();
} else {
    
    $sql = "SELECT * FROM questoes";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $questoes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $questao = $questoes[array_rand($questoes)];

    $sql = "SELECT * FROM alternativas WHERE questao_id = :questao_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':questao_id', $questao['id'], PDO::PARAM_INT);
    $stmt->execute();
    $alternativas = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

