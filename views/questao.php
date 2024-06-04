<?php
include_once('../verifica.php');
include_once('../buscaquestao.php');
?>

<h1><?php echo $questao['enunciado']; ?></h1>

<form action="../resposta.php" method="POST">
    <?php 
        foreach ($alternativas as $item){ ?>
        <input value="<?php echo $item['id']; ?>" type="checkbox" name="respostas[]"><?php echo $item['texto']; ?> <br>

        <input type="hidden" value="<?php echo $questao['id']; ?>" name="questao">
        <input type="hidden" value="<?php echo $item['id']; ?>" name="alternativas[]">

        <?php } ?>

        <input type="submit" name="btnResposta">
</form>


