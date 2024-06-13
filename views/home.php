<?php

include_once('../verifica.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="row home-titulos">
            <h1 class="title-home">Seja bem-vindo,<span class="home-nome"><?php echo $_SESSION['nome'];?></span></h1>
        </div>
        <div class="row home-pontos">
            <h3 class="pontuacao-home">PONTOS:</h3>
            <h2 class="home-pontuacao">
                <?php echo isset($_SESSION['pontuacao']) && $_SESSION['pontuacao'] !== '' ? $_SESSION['pontuacao'] : 0; ?>
            </h2>
        </div>

        <div class="row home-bottons">
            <div class="home-jogar">
                <a class="botton-home" href="questao.php">JOGAR</a>
            </div>
            <div class="home-ranking">
                <a class="botton-home" href="ranking.php">RANKING</a>
            </div>
            <div class="home-sair">
                <a class="botton-home" href="../logout.php">Sair do sistema</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>