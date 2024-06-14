<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Início</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="assets/Logo_Flip.png" type="image/png">
    <style>
    .start-img {
        display: inline-block;
    }

    .start-img img {
        width: 45%;
        height: auto;
        transition: 500ms;
    }

    .start-img img:hover {
        height: auto;
        box-shadow: none;
        transition: 500ms;
        transform: scale(0.8);
    }

    .img-logo {
        width: 110px;
    }

    .img-ufsc {
        width: 100px;
        margin-left: 40px;
    }

    .img-personagem {
        position: absolute;
        bottom: 20px;
        right: 35px;
        width: 180px;
    }

    @media screen and (max-width: 700px) {
        .img-personagem {
            width: 80px;
        }
        .start-img img {
        width: 80%;
        height: auto;
        margin-top: 50px;
        margin-bottom: 50px;
    }
    .img-logo {
        width: 60px;
    }

    .img-ufsc {
        width: 50px;
        margin-left: 40px;
    }

    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="title-flipufsc"><span class="flip">FLIP</span><span class="ufsc">UFSC</span></h1>
        </div>
        <div class="row">
            <a class="start-img" href="start.php">
                <img src="assets/start.svg" alt="Botão de START">
            </a>
        </div>
        <div class="row">
            <img class="img-logo" src="assets/Logo_Flip.png" alt="Logo FLipUFSC">
            <img class="img-ufsc" src="assets/Logo_UFSC_.png" alt="Logo UFSC">
        </div>
        <img src="assets/personagem.png" alt="Personagem" class="img-personagem">

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>