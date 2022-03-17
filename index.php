<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/login.css" rel="stylesheet" type="text/css">
    
    <title>Login - Education School</title>
</head>
<body>

 <div class="container">

 <div class="container login-card">
    <center>
        <!-- <img src="img/avatar.svg" alt="login-avatar" id="avatar-img">   -->  
        <h2>Entrar</h2>  
        <small> <p>Por favor, insira suas credenciais para logar no sistema.</p> </small>
    </center>

        <form action="index1.php" class='form-group' method='post'>
            <div>
        <label class="login-label">E-MAIL</label>
        <input type="text" name="usuario" id="" class='form-control login-input' placeholder='Digite seu E-mail...' autocomplete="off" required>
            
            </div>

             <div>
                <label class="login-label">SENHA</label>
                <input type="password" name="senha" id="" class='form-control login-input' placeholder='Digite sua Senha...' autocomplete="off" required>
            </div>
        
            <div style="text-align: right">
                <button type="submit" class="btn btn-sm btn-success login-btn">Entrar</button>
            </div>

        </form>
 </div>

 <div>
    <center>
        <small><p>Cadastre-se no sistema clicando <a href="cadastro_usuario.php">aqui</a></p></small>
    </center>
    </div>
 </div>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>