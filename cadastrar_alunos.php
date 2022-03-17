<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Alunos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/login.css" rel="stylesheet" type="text/css">

</head>
<body>
    <div class="container login-card " style="margin-top:60px">
    <center>
        <h2>Cadastrar Aluno</h2>
    </center>
    <form method="POST" action="add_aluno.php">
  <div class="mb-3">
    <label for="nomedoaluno" class="form-label">Nome Completo do Aluno</label>
    <input type="text" class="form-control" id="nomedoaluno" name="nomedoaluno" required autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="anoletivo" class="form-label">Ano Letivo</label>
    <input type="text" class="form-control" id="anoletivo" name="anoletivo" required autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="nota1" class="form-label">Primeira Nota</label>
    <input type="text" class="form-control" id="primeiranota" name="primeiranota" required autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="nota2" class="form-label">Segunda Nota</label>
    <input type="text" class="form-control" id="segundanota" name="segundanota" required autocomplete="off">
  </div>
  <div class="mb-3">
    <label for="nota3" class="form-label">Terceira Nota</label>
    <input type="text" class="form-control" id="terceiranota" name="terceiranota" required autocomplete="off">
  </div>
  <div style="text-align: right;">
    <button type='submit' class="btn btn-sm btn-success">Enviar</button>
  </div>
</form>

    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>