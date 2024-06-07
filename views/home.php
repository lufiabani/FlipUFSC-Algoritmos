<?php

include_once('../verifica.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
</head>
<body>
    <h1>Seja bem-vindo, <?php echo $_SESSION['nome'];?></h1>
    <h3>PONTUAÇÃO: <?php echo $_SESSION['pontuacao']; ?></h3>

    <a href="questao.php">JOGAR</a>
    <a href="ranking.php">RANKING</a>


    <a href="../logout.php">Sair do sistema</a>
</body>
</html>