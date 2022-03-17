<?php

    include 'conexao.php';
    include 'script/password.php';

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT email, senha FROM usuarios WHERE email = '$usuario'";
    $buscar = mysqli_query($conexao, $sql);

     $total = mysqli_num_rows($buscar);

     while ($array = mysqli_fetch_array($buscar)){
            
            $conferirSenha = $array['senha'];

 $senhadc = sha1($senha);


         if($total > 0){

            if($senhadc == $conferirSenha) {

                header('Location: menu.php'); 

            }  else {
                header('Location: erro.php');
            }
        
        }  else {

        header('Location: erro.php');
    }  

    }
    


?>