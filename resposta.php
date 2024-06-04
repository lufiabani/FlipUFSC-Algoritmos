<?php
include_once('verifica.php');
include_once('bd.php');

$respostas = $_POST['respostas'];
$questao = $_POST['questao'];
$alternativas = $_POST['alternativas'];

$sql = "SELECT * FROM alternativas WHERE (questao_id = $questao and resposta = 1)";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$verdadeiras = $stmt->fetchAll();

$feedback = [];

foreach ($verdadeiras as $i => $verdadeira){
    echo $respostas[$i];
    echo $verdadeira['id'];

    if ($verdadeira['id'] == $respostas[$i]){
        
    } else {

    }
}