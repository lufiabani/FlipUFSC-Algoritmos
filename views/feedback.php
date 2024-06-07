<?php
include_once('../verifica.php');
!isset($_SESSION['resultado']) ? header("Location: home.php") : null;
$questao = $_SESSION['questao'];
?>

<h3><?php echo $questao['enunciado']; ?></h3>

<table border="2">
    <tr>
        <th>Marcada</th>
        <th>alternativa</th>
        <th>Resultado</th>
    </tr>
    <?php
        foreach($_SESSION['resultado'] as $alternativa) { ?>
    <tr>
        <td>
            <?php  echo $alternativa['resposta_usuario'] == 1 ? "V" : "F" ; ?>
        </td>
        <td>
            <?php echo $alternativa['texto'];?>
        </td>
        <td>
            <?php  echo $alternativa['acertou'] == 1 ? "ACERTOU" : "ERROU" ; ?>
        </td>
    </tr>
    <?php } ?>
</table>

<h3>Pontuação ganha: <?php echo $_SESSION['pontuacao_rodada']; ?></h3>
<h3>Pontuação atual:<strong> <?php echo $_SESSION['pontuacao']; ?> </strong></h3>


<?php
unset($_SESSION['questao']);
unset($_SESSION['resultado']);
unset($_SESSION['pontuacao_rodada']);
?>

<a href="ranking.php">Visualizar Ranking</a>
<a href="home.php">Voltar a tela inicial</a>