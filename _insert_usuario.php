<?php
    include 'conexao.php';
    include 'script/password.php';

$nomeusuario = $_POST['nomeusuario'];
$email = $_POST['emailusuario'];
$senha = $_POST['senhausuario'];
$senha2 = $_POST['senhausuario2'];
$nivel = $_POST['nivelusuario'];


$sql = "INSERT INTO `usuarios`(`nome_usuario`, `email`, `senha`, `senha2`,`nivel`) VALUES ('$nomeusuario','$email', sha1('$senha'), '$senha2', '$nivel')";

$inserir = mysqli_query($conexao, $sql);

?>
<?php

    header ('location: index.php');


?>
