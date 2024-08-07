<?php 
@session_start();
include_once('bd.php');

if (@$_POST['btnLogin']) {
    $matricula = $_POST['matricula'];
    $sql = "SELECT * FROM alunos WHERE matricula = :matricula";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':matricula', $matricula, PDO::PARAM_INT);
    $stmt->execute();
    $resultado = $stmt->fetchAll();

    if (count($resultado) == 1) {
        $_SESSION['nome'] = $resultado[0]['nome'];
        $_SESSION['usuario_id'] = $resultado[0]['id'];
        $_SESSION['pontuacao'] = $resultado[0]['pontuacao'];

        header("Location: views/home.php");
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}
?>
