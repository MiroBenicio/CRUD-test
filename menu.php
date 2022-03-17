<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Acessos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>

        .menu-card {
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
          width: 100%;
        }
    </style>
</head>
<body>
<?php
  include 'conexao.php';

  /* session_start();
  $usuario = $_SESSION['emailusuario'];

  if(!isset($_SESSION['emailusuario'])){
    header ('Location: index.php');
  } */

  /* $usuario = $_POST['usuario'];

  $sql = "SELECT nivel FROM usuarios WHERE email = '$usuario'";
  $buscar = mysqli_query($conexao, $sql);
  $array = mysqli_fetch_array($buscar);
  echo $nivel = $array['nivel']; */

?>

<div class="container">


<center>
  <div class="menu-card">
<div class="row">
<div class="card text-center" style="width: 18rem; margin-right: 8px;">
  <div class="card-body">
    <h5 class="card-title">Lista de Alunos e Notas</h5>
    <p class="card-text">Consulte aqui o relatório de notas dos discentes.</p>
    <a href="lista_alunos.php" class="btn btn-success">Acessar</a>
  </div>
</div>

<div class="card text-center" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Cadastrar Aluno</h5>
    <p class="card-text">Cadastre um novo aluno na lista e suas notas.</p>
    <a href="cadastrar_alunos.php" class="btn btn-success">Acessar</a>
  </div>
</div>
</div>
</div>
</center>


</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>