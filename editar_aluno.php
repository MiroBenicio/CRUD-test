<?php

include 'conexao.php';

 $id = $_GET['id'];



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Dados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/login.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="container login-card" style="margin-top:60px">
    <center>
        <h2>Atualizar Dados</h2>
    </center>
    <form method="POST" action="atualizar_aluno.php">
        <?php

            $sql = "SELECT * FROM `alunos` WHERE id_alunos = $id";
            $buscar = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscar)){
            $id_alunos = $array['id_alunos'];
            $nomedoaluno = $array['nomedoaluno'];
            $ano = $array['anoletivo'];
            $nota1 = $array['primeiranota'];
            $nota2 = $array['segundanota'];
            $nota3 = $array['terceiranota'];



        ?>  
  
        
            <input type="number" class="form-control" name="id" value="<?php echo $id ?>"style="display:none;">
                
            <div class="mb-3">
            <label for="nomedoaluno" class="form-label">Nome Completo do Aluno</label>
            <input type="text" class="form-control" id="nomedoaluno" name="nomedoaluno"  autocomplete="off" value ="<?php echo $nomedoaluno ?>">
        </div>
        <div class="mb-3">
            <label for="anoletivo" class="form-label">Ano Letivo</label>
            <input type="text" class="form-control" id="anoletivo" name="anoletivo"  autocomplete="off" value ="<?php echo $ano ?>">
        </div>
        <div class="mb-3">
            <label for="nota1" class="form-label">Primeira Nota</label>
            <input type="text" class="form-control" id="primeiranota" name="primeiranota"  autocomplete="off" value ="<?php echo $nota1 ?>">
        </div>
        <div class="mb-3">
            <label for="nota2" class="form-label">Segunda Nota</label>
            <input type="text" class="form-control" id="segundanota" name="segundanota"  autocomplete="off" value ="<?php echo $nota2 ?>">
        </div>
        <div class="mb-3">
            <label for="nota3" class="form-label">Terceira Nota</label>
            <input type="text" class="form-control" id="terceiranota" name="terceiranota"  autocomplete="off" value ="<?php echo $nota3 ?>">
        </div>
        <div style="text-align: right;">
            <button type='submit' class="btn btn-sm btn-success">Atualizar</button>
        </div>
        <?php } ?>
</form>

    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>