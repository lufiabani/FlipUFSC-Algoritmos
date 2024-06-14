<?php
include_once('../bd.php');
include_once('../verifica.php');

$sql = "SELECT * FROM alunos ORDER BY pontuacao DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ranking Completo</title>
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
        --cor-ranking: #D6B88C;
        --cor-ranking-fundo: #ECE8B0;
    }

    .jogadores-title {
        text-align: center;
        margin-bottom: 20px;
        font-size: 1em;
        color: var(--cor-amarelo);
        font-family: 'Arcade Game 2';
    }

    body {
        background-color: var(--cor-fundo);
        margin: 0;
        width: 100%;
        padding: 20px;
    }

    h3 {
        font-family: 'Arcade Game 2';
        color: var(--cor-fundo);
        font-size: 1em;
    }

    table {
        width: 80%;
        border-collapse: collapse;
        margin: 20px auto;
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
        font-size: 0.6em;
    }

    th {
        background-color: var(--cor-fundo);
        color: var(--cor-branco);
    }

    .pontuacao {
        color: var(--cor-amarelo);
    }

    a {
        font-family: 'Arcade Game 2', sans-serif;
        font-size: 0.8em;
        border-top: solid 3px rgb(70, 70, 70);
        border-left: solid 3px rgb(70, 70, 70);
        border-right: solid 2px var(--cor-branco);
        border-bottom: solid 2px var(--cor-branco);
        color: rgb(70, 70, 70);
        margin-right: 10px;
        background-color: var(--cor-cinza);
        padding: 8px;
        transition: 500ms;
        box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        text-decoration: none;
    }

    a:hover {
        border-top: solid 2px rgb(70, 70, 70);
        border-left: solid 2px rgb(70, 70, 70);
        border-right: none;
        border-bottom: none;
        transition: 500ms;
        box-shadow: none;
        text-decoration: none;
        color: rgb(70, 70, 70);
    }

    .container {

        margin: auto;
        background: var(--cor-branco);
        padding: 20px;
        border: solid 4px rgb(70, 70, 70);
        box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.5);
    }

    .button-jogadores{
        text-align: center;
    }

    @media screen and (max-width: 700px) {

        th,
        td {
            font-size: 0.3em;
        }

        h3 {
            font-size: 0.4em;
        }

        a {
            font-size: 0.5em;
            margin-top: 8px;
        }
    }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="jogadores-title">Ranking Completo dos Alunos</h1>
        <table>
            <tr>
                <th></th>
                <th>Lugar</th>
                <th>Nome</th>
                <th>Pontuação</th>
            </tr>
            <?php foreach ($alunos as $i => $aluno) { 
            if ($i == 0) { // Primeiro lugar
        ?>
            <tr>
                <td style='background-color: var(--cor-vermelho); border: solid 2px black;'>
                    <i class="fa-solid fa-crown" style='color: var(--cor-amarelo);'></i>
                </td>
                <td style='background-color: var(--cor-vermelho); color: var(--cor-branco); border: solid 2px black;'>
                    <?php echo $i + 1; ?></td>
                <td
                    style='background-color: var(--cor-amarelo); color: var(--cor-branco); border: solid 2px var(--cor-vermelho);'>
                    <?php echo htmlspecialchars($alunos[$i]['nome']); ?></td>
                <td style='background-color: var(--cor-vermelho); color: var(--cor-amarelo); border: solid 2px black;'>
                    <?php echo isset($alunos[$i]['pontuacao']) ? htmlspecialchars($alunos[$i]['pontuacao']) : 0; ?>
                </td>
            </tr>
            <?php } elseif ($i == 1 || $i == 2) {  ?>
            <tr>
                <td style='background-color: var(--cor-ranking); border: solid 2px black;'>
                    <i class="fa-solid fa-medal" style='color: var(--cor-amarelo);'></i>
                </td>
                <td style='background-color: var(--cor-ranking); color: var(--cor-branco); border: solid 2px black;'>
                    <?php echo $i + 1; ?></td>
                <td
                    style='background-color: var(--cor-ranking-fundo); color: var(--cor-cinza); border: solid 2px black;'>
                    <?php echo htmlspecialchars($alunos[$i]['nome']); ?></td>
                <td style='background-color: var(--cor-ranking); color: var(--cor-amarelo); border: solid 2px black;'>
                    <?php echo isset($alunos[$i]['pontuacao']) ? htmlspecialchars($alunos[$i]['pontuacao']) : 0; ?>
                </td>
            </tr>
            <?php } else {  ?>
            <tr>
                <td style='background-color: var(--cor-fundo-clara);'><i style='color: var(--cor-branco);'
                        class="fa-solid fa-user"></i></td>
                <td><?php echo $i + 1; ?></td>
                <td><?php echo htmlspecialchars($alunos[$i]['nome']); ?></td>
                <td style='color: var(--cor-amarelo);'>
                    <?php echo isset($alunos[$i]['pontuacao']) ? htmlspecialchars($alunos[$i]['pontuacao']) : 0; ?>
                </td>
            </tr>
            <?php } } ?>
        </table>
        <div class="button-jogadores">
            <a href="home.php" class="button">Voltar à tela inicial</a>
        </div>
    </div>
</body>

</html>