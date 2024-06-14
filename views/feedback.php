<?php
include_once('../verifica.php');
!isset($_SESSION['resultado']) ? header("Location: home.php") : null;
$questao = $_SESSION['questao'];
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="assets/Logo_Flip.png" type="image/png">
    <style>
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
        --cor-fundo-clara: #ADC3F1;
    }

    body {
        background-color: var(--cor-fundo);
        margin: 0;
        padding: 20px;
    }

    h3 {
        font-family: 'Arcade Game 2';
        color: var(--cor-fundo);
        font-size: 0.8em;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        margin-top: 10px;
    }

    table,
    th,
    td {
        border: 2px solid var(--cor-fundo);
    }

    th,
    td {
        padding: 10px;
        text-align: center;
        font-family: 'Arcade Game 2';
        font-size: 0.8em;
    }

    th {
        background-color: var(--cor-fundo);
        color: var(--cor-branco);
    }

    tr:nth-child(even) {
        background-color: var(--cor-fundo-clara);
    }

    .pontuacao {
        color: var(--cor-amarelo);
    }

    .buttons-feedback {
        text-align: center;
        margin-top: 20px;
    }

    a {
        font-family: 'Arcade Game 2', sans-serif;
        font-size: 0.8em;
        border-top: solid 3px rgb(70, 70, 70);
        border-left: solid 3px rgb(70, 70, 70);
        border-right: solid 2px var(--cor-branco);
        border-bottom: solid 2px var(--cor-branco);
        text-decoration: none;
        color: rgb(70, 70, 70);
        margin-right: 10px;
        background-color: var(--cor-cinza);
        padding: 8px;
        transition: 500ms;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    a:hover {
        border-top: solid 4px rgb(70, 70, 70);
        border-left: solid 4px rgb(70, 70, 70);
        border-right: none;
        border-bottom: none;
        transition: 500ms;
        box-shadow: none;
        text-decoration: none;
        color: rgb(70, 70, 70);
    }

    .container {
        max-width: 800px;
        margin: auto;
        background: var(--cor-branco);
        padding: 20px;
        border: solid 4px rgb(70, 70, 70);
        box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.5);
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

    @media screen and (max-width: 700px) {

        th,
        td {
            font-size: 0.4em;
        }

        h3 {
            font-size: 0.5em;
        }

        a {
            font-size: 0.5em;
            margin-top: 8px;
        }

        .buttons-feedback {
            display: inline-flex;
        }


    }
    </style>
</head>

<body>
    <div class="container">
        <h3><?php echo htmlspecialchars($questao['enunciado']); ?></h3>
        <div class="comando"><?php echo htmlspecialchars($questao['comando']); ?></div>
        <div class="referencia"><?php echo htmlspecialchars($questao['referencia']); ?></div>
        <div class="prova"><strong>Prova:</strong> <?php echo htmlspecialchars($questao['prova']); ?></div>

        <table>
            <tr>
                <th>Marcada</th>
                <th>Alternativa</th>
                <th>Resultado</th>
            </tr>
            <?php foreach($_SESSION['resultado'] as $alternativa) { ?>
            <tr>
                <td><?php echo $alternativa['resposta_usuario'] == 1 ? "V" : "F"; ?></td>
                <td><?php echo htmlspecialchars($alternativa['texto']); ?></td>
                <td
                    style="color: <?php echo $alternativa['acertou'] == 1 ? 'var(--cor-verde)' : 'var(--cor-vermelho)'; ?>">
                    <?php echo $alternativa['acertou'] == 1 ? "ACERTOU" : "ERROU"; ?></td>
            </tr>
            <?php } ?>
        </table>

        <h3>Pontuação ganha: <span
                class="pontuacao"><?php echo htmlspecialchars($_SESSION['pontuacao_rodada']); ?></span></h3>
        <h3>Pontuação atual:<span class="pontuacao"> <strong> <?php echo htmlspecialchars($_SESSION['pontuacao']); ?>
                </strong></span></h3>

        <?php
        unset($_SESSION['questao']);
        unset($_SESSION['resultado']);
        unset($_SESSION['pontuacao_rodada']);
        ?>
        <div class="buttons-feedback">
            <a href="ranking.php">Visualizar Ranking</a>
            <a href="home.php">Voltar à tela inicial</a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>