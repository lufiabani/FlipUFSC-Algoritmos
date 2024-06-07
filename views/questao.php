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
    <style>
        /* styles.css */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .questao-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin: 20px;
        }

        .enunciado {
            margin-bottom: 20px;
            font-size: 1.2em;
            color: #333333;
        }

        .referencia {
            margin-bottom: 20px;
            font-size: 0.5em;
            color: #333333;
            font-style: italic;
            text-align: right;
        }

        .prova {
            margin-bottom: 10px;
            font-size: 0.9em;
            color: #555555;
            border-top: 1px solid #ddd;
            margin-top: 20px;
            padding-top: 10px;
        }

        .comando {
            margin-bottom: 20px;
            font-size: 1em;
            color: #555555;
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
            color: #555555;
        }

        .btn-resposta {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btn-resposta:hover {
            background-color: #0056b3;
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
                            <strong><input type="radio" name="respostas[<?php echo $item['id']; ?>]" value="0" checked>F</strong>
                            <strong><input type="radio" name="respostas[<?php echo $item['id']; ?>]" value="1">V</strong>
                            <?php echo htmlspecialchars($item['texto']); ?>
                        </label>
                    </div>
            <?php } ?>
            <input type="hidden" value="<?php echo $questao['id']; ?>" name="questao">
            <input type="submit" name="btnResposta" value="Enviar Resposta" class="btn-resposta">
        </form>
        <div class="prova"><strong>Prova:</strong> <?php echo htmlspecialchars($questao['prova']); ?></div>
    </div>
</body>
</html>
