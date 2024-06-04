<?php

include_once('../buscaquestao.php');

?>

<h1><?php echo $questao['enunciado']; ?></h1>

<ul>

<?php

foreach ($alternativas as $item) {
    echo "<li> $item[texto] </li>";
}
?>

</ul>

