<?php
$usuario = $_POST["txt_usuario"];
$senha = $_POST["psw_senha"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<!-- Meta tags Obrigatórias -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<title>Seja bem vindo</title>
</head>
<body>
<div class="container mt-5">
<div class="row">
<div class="col-sm">
</div>
<div class="col-sm">
<div class="alert alert-primary" role="alert">
<?php echo "Usuário: ".$usuario?>
</div>
<div class="alert alert-success" role="alert">
<?php echo "Senha: ".$senha?>
</div>
</div>
<div class="col-sm">
</div>
</div>
</div>
</body>
</html>