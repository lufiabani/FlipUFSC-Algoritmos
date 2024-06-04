<?php

@session_start();

if (@$_SESSION['nome']){
    header("Location: home.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlipUFSC</title>
</head>
<body>
    <h1>LOGIN</h1>

    <form action="login.php" method="POST">
        <input type="number" placeholder="Matrícula" name="matricula">
        <input type="submit" name="btnLogin">
    </form>
</body>
</html>