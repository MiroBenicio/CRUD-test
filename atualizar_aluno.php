<?php

    include 'conexao.php';

$id = $_POST['id'];
$nomedoaluno = $_POST['nomedoaluno'];
$anoletivo = $_POST['anoletivo'];
$nota1 = $_POST['primeiranota'];
$nota2 = $_POST['segundanota'];
$nota3 = $_POST['terceiranota'];

$sql = "UPDATE `alunos` SET `nomedoaluno`='$nomedoaluno',`anoletivo`='$anoletivo',`primeiranota`= $nota1,`segundanota`=$nota2,`terceiranota`= $nota3 WHERE id_alunos = $id";

$atualizar = mysqli_query($conexao, $sql);


?>
<?php 
    header ('location: lista_alunos.php');
?>