<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos da Education School</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container" style="margin-top:32px">

  <h3>Alunos</h3>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Ano Letivo</th>
      <th scope="col">1º Nota</th>
      <th scope="col">2º Nota</th>
      <th scope="col">3º Nota</th>
      <th scope="col">Editar</th>

    </tr>
  </thead>
      <?php
        include 'conexao.php';
        $sql = "SELECT * FROM `alunos`";
        $busca = mysqli_query($conexao, $sql);
        
        while($array = mysqli_fetch_array($busca)){

          $id_alunos = $array['id_alunos'];
          $nomedoaluno = $array['nomedoaluno'];
          $ano = $array['anoletivo'];
          $nota1 = $array['primeiranota'];
          $nota2 = $array['segundanota'];
          $nota3 = $array['terceiranota'];

     

      ?>
    <tr>
      <td><?php echo $id_alunos ?></td>
      <td><?php echo $nomedoaluno ?></td>
      <td><?php echo $ano ?></td>
      <td><?php echo $nota1 ?></td>
      <td><?php echo $nota2 ?></td>
      <td><?php echo $nota3 ?></td>
      <td><a href="editar_aluno.php?id=<?php echo $id_alunos?>" role="button" class="btn btn-success btn-sm btn-edit">Editar</a></td>

      <?php } ?>

    </tr>
    
  </table>

<!--   ############################### MODAL ##########################################-->
<!-- <div class="modal" tabindex="-1" id="editmodal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Atualizar Dados do Aluno</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php
         // include 'editar_aluno.php'
        ?> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Atualizar</button>
      </div>
    </div>
  </div>
</div> -->

</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- <script>
  $(document).ready( function () {
    $('.btn-edit').on('click', function (){
      $('#editmodal').modal('show');

    });
  }); -->



</script>
</body>
</html>