<!doctype html>
<html lang="pt-br">
<head>
<?php require 'meta.php'; ?>

    <!-- Folha de Estilo -->
    <link href="../css/menu.css" rel="stylesheet">
</head>

<style>
*{
margin: 0;
padding: 0;
}
h1{
margin: 50px 0;
text-align: center;
}
input[type=submit]{
float: right;
}
.container-width{
width: 25%;
}
.btn-width{
width: 45%;
}
</style>

<body>

<h1>Cadastrar novo Usuário</h1>

<div class="container">
<form action="sucessoUsuario.php" method="POST">
<div class="form-group">
<label for="nome_usuario">Usuário:</label>
<input class="form-control" type="text" id="nome_usuario" placeholder="Digite usuario" name="nome_usuario" required>
</div>

<div class="form-group">
<label for="senha_usuario">Senha:</label>
<input class="form-control" type="password" id="senha_usuario" placeholder="Digite senha" name="senha_usuario" required>
</div>

<button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>


</body>
</html>