<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
    
 <div class="container login-card"  style="margin-top:100px">
     <h4 style="text-align:center">Cadastre-se na Education School</h4>
    <form action="_insert_usuario.php" method="POST">
        <div class="form-group">
            <label for="" class="login-label">Nome do Usuário</label>
            <input type="text" name="nomeusuario" class="form-control  login-input" required autocomplete="off" placeholder="Nome Completo">
        </div>

        <div class="form-group">
            <label for="" class="login-label">E-mail</label>
            <input type="email" name="emailusuario" class="form-control login-input" required autocomplete="off" placeholder="Insira seu endereço de E-mail">
        </div>

        <div class="form-group">
            <label for="" class="login-label">Senha</label>
            <input id="senha1" type="password" name="senhausuario" class="form-control login-input" required autocomplete="off" placeholder="Defina sua senha de acesso">
        </div>

        <div class="form-group">
            <label for="" class="login-label">Repita a senha</label>
            <input type="password" name="senhausuario2" class="form-control login-input" required autocomplete="off" placeholder="Repita sua senha" id="senha2"oninput="validaSenha(this)">
        </div> 

        <div class="form-group">
            <label for="" class="login-label">Nível de acesso</label>
            <select name="nivelusuario" id="" class='form-control'>
                <option value="" selected >Escolha seu nível de acesso</option>
                <option value="1">Professor</option>
                <option value="2">Aluno</option>
            </select>
        </div>
        
        <div style="text-align: right">
            <button type="submit" class="btn btn-sm btn-success login-btn">Cadastrar</button>
        </div>
    </form>
        
<!--     <a href="index.php" role="button" class='btn btn-primary btn-sm'>Voltar</a>
 -->    



 </div>
    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
    function validaSenha (input) {
        if(input.value != document.getElementById('senha1').value) {
            input.setCustomValidity("As senhas não coincidem");
        } else {
            input.setCustomValidity('');
        }
    }
</script>


</body>
</html>