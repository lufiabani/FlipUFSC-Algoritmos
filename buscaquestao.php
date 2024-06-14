<?php

include_once('bd.php');
include_once('verifica.php');

$sql = "SELECT * FROM questoes";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$questoes = $stmt->fetchAll();
$questao = $questoes[array_rand($questoes)];

$sql = "SELECT * FROM alternativas WHERE (questao_id = $questao[id])";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$alternativas = $stmt->fetchAll();
