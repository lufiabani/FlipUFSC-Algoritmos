<?php
include_once('../bd.php');
include_once('../verifica.php');

$sql = "SELECT * FROM alunos ORDER BY pontuacao DESC";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$alunos = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table border="2">
    <tr>
        <th>Lugar</th>
        <th>Nome</th>
        <th>Pontuação</th>
    </tr>
<?php
foreach($alunos as $i => $aluno) { ?>
<tr>
        <td><?php echo $i+1; ?></td>
        <td><?php echo $aluno['nome']; ?></td>
        <td><?php echo $aluno['pontuacao']; ?></td>
    </tr>
    <?php } ?>
</table>

<a href="home.php">Volta a tela inicial</a>