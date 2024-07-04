<?php

include_once('bd.php');
include_once('verifica.php');

$usuario_id = $_SESSION['usuario_id'];

// Consulta para contar as jogadas na data de hoje
$sql_jogadas = "SELECT * FROM rodadas WHERE aluno_id = :usuario_id AND DATE(datahora) = CURDATE()";
$stmt_jogadas = $pdo->prepare($sql_jogadas);
$stmt_jogadas->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
$stmt_jogadas->execute();
$resultado_jogadas = $stmt_jogadas->fetchAll(PDO::FETCH_ASSOC);

if (count($resultado_jogadas) >= 2) {
    header("Location: ../logout.php");
} else {
    $sql = "SELECT * FROM questoes";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $questoes = $stmt->fetchAll();
    $questao = $questoes[array_rand($questoes)];

    $sql = "SELECT * FROM alternativas WHERE (questao_id = $questao[id])";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $alternativas = $stmt->fetchAll();
}
