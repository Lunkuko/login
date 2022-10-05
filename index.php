<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Login</title>
</head>
<body>
<!--Usando um grid para desenhar o layout-->
<div class="container mt-5">
<div class="row">
<div class="col-sm">
</div>
<!--Utilizando espaçamento-->
<div class="col-sm mt-5">
<h1>Faça o seu login</h1>
<form method = "POST" action = "login.php">
<div class="form-group">
<input type="text" name="txt_usuario" class="form-control" id="usuario" aria-describedby="ajudausuario" placeholder="Seu nome de usuário" >
<small id="ajudausuario" class="form-text text-muted">Não iremos compartilhar seu nome de usuário com ninguém.</small>
</div>
<div class="form-group">
<input type="password" name="psw_senha" class="form-control" id="senha" placeholder="Senha" >
<small id="ajudausuario" class="form-text text-muted">Use uma senha segura.</small>
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
<div class="col-sm">
</div>
</div>
</div>
</body>
</html>
