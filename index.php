<?php

@session_start();

if (@$_SESSION['nome']){
    header("Location: views/home.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>FlipUFSC</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="assets/Logo_Flip.png" type="image/png">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="title-flipufsc"><span class="flip">FLIP</span><span class="ufsc">UFSC</span></h1>
        </div>
        <div class="row">
            <h1 class="title-login">LOGIN</h1>
        </div>
        <div class="row">
            <form action="login.php" method="POST">
                <div class="input-matricula">
                    <i class="fa-solid fa-user"></i>
                    <input type="number" class="login-matricula" placeholder="Matrícula" name="matricula" required>
                </div>
                <input class="login-submit" type="submit" name="btnLogin">
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>