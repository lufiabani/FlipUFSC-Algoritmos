<?php
include_once('../verifica.php');
include_once('../buscaquestao.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="assets/Logo_Flip.png" type="image/png">
    <style>
    /* styles.css */
    @font-face {
        font-family: 'Arcade Game 2';
        src: url('fonts/PublicPixel-E447g.ttf') format('truetype');
    }

    :root {
        --cor-fundo: #193D8B;
        --cor-branco: #ffffff;
        --cor-amarelo: #F2CD3A;
        --cor-cinza: rgb(145, 144, 144);
        --cor-verde: #5AAD00;
        --cor-vermelho: #EC2127;
    }

    body {
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: var(--cor-fundo);
    }

    .questao-container {
        background-color: var(--cor-fundo);
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 100%;
        margin: 20px;
    }

    .enunciado {
        margin-bottom: 0px;
        font-size: 1em;
        color: var(--cor-amarelo);
        font-family: 'Arcade Game 2';
    }

    .referencia {
        font-family: 'Arcade Game 2';
        font-size: 0.3em;
        color: var(--cor-amarelo);
        font-style: italic;
        text-align: right;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .prova {
        font-size: 0.7em;
        color: var(--cor-cinza);
        font-family: 'Arcade Game 2';
        border-top: 1px solid #ddd;
        margin-top: 20px;
        padding-top: 10px;
    }

    .comando {
        font-size: 0.7em;
        color: var(--cor-cinza);
        font-family: 'Arcade Game 2';
    }

    .form-questao {
        display: flex;
        flex-direction: column;
    }

    .alternativa {
        margin-bottom: 10px;
    }

    .alternativa label {
        font-size: 1em;
        display: flex;
    }

    .container-alternativas {
        margin-right: 10px;
        white-space: nowrap;
        font-family: 'Arcade Game 2';
    }

    .texto-alternativa {
        color: var(--cor-branco);
        font-family: 'Arcade Game 2';
        font-size: 0.5em;
    }

    .alternativa-v {
        color: var(--cor-verde);
    }

    .alternativa-f {
        color: var(--cor-vermelho);
    }

    .alternativa-f input, .alternativa-v input{
        margin-right: 4px;
    }

    .btn-resposta{
    font-family: 'Arcade Game 2';
    font-size: 1em;
    border-top: solid 4px rgb(70, 70, 70);
    border-left: solid 4px rgb(70, 70, 70);
    border-right: solid 4px var(--cor-branco);
    border-bottom: solid 4px var(--cor-branco);
    color: rgb(70, 70, 70);
    background-color: var(--cor-cinza);
    cursor: pointer;
    padding: 10px 20px;
    transition: 500ms;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
}

.btn-resposta:hover{
    border-top: solid 4px var(--cor-branco);
    border-left: solid 4px var(--cor-branco);
    border-right: none;
    border-bottom: none;
    transition: 500ms;
    box-shadow: none;
}
@media screen and (max-width: 700px) {
    .enunciado {
        font-size: 0.6em;
    }



}
    </style>
</head>

<body>
    <div class="questao-container">
        <h3 class="enunciado"><?php echo htmlspecialchars($questao['enunciado']); ?></h3>
        <div class="comando"><?php echo htmlspecialchars($questao['comando']); ?></div>
        <div class="referencia"><?php echo htmlspecialchars($questao['referencia']); ?></div>

        <form action="../resposta.php" method="POST" class="form-questao">
            <?php 
                foreach ($alternativas as $item) { ?>
            <div class="alternativa">
                <label>
                    <div class="container-alternativas">
                        <strong class="alternativa-f"><input type="radio" name="respostas[<?php echo $item['id']; ?>]"
                                value="0" checked>F</strong>
                        <strong class="alternativa-v"><input type="radio" name="respostas[<?php echo $item['id']; ?>]"
                                value="1">V</strong>
                    </div>
                    <div class="texto-alternativa"><?php echo htmlspecialchars($item['texto']); ?></div>
                </label>
            </div>
            <?php } ?>
            <input type="hidden" value="<?php echo $questao['id']; ?>" name="questao">
            <input type="submit" name="btnResposta" value="Enviar Resposta" class="btn-resposta">
        </form>
        <div class="prova"><strong>Prova:</strong> <?php echo htmlspecialchars($questao['prova']); ?></div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>