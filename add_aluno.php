<?php
     include 'conexao.php';

$nomedoaluno = $_POST['nomedoaluno'];
$anoletivo = $_POST['anoletivo'];
$nota1 = $_POST['primeiranota'];
$nota2 = $_POST['segundanota'];
$nota3 = $_POST['terceiranota'];

$sql = "INSERT INTO `alunos`(`nomedoaluno`, `anoletivo`, `primeiranota`, `segundanota`, `terceiranota`) VALUES ('$nomedoaluno','$anoletivo',$nota1,$nota2,$nota3)";

$inserir = mysqli_query($conexao, $sql);

?>
<?php
    header('location:menu.php')
?>