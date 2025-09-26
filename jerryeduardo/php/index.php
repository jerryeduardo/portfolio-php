<!doctype html>
<html lang="pt-br">
<head>
<?php require 'meta.php'; ?>

    <!-- Folha de Estilo -->
    <link href="../css/menu.css" rel="stylesheet">
    <link href="../css/painel.css" rel="stylesheet">
</head>

<style>
*{
    margin: 0;
    padding: 0;
    font-family: 'Mulish', sans-serif; 
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

/* Login */
.logotipo{
    margin-top: 10%;
    text-align: center;
}
.logotipo p{
    font-size: 24px;
    font-weight: bold;
}
.logotipo span:first-of-type{
    color: rgb(81, 81, 81);
}
.logotipo span:last-of-type{
    color: rgb(0, 113, 201);
}
.section{
    text-align: center;
}
.content-section h2{
    margin-top: 10px;
    font-size: 14px;
    font-weight: normal;
}
</style>

<body>

    <div class="logotipo">
        <p>
            <span>Jerry</span><span>Eduardo</span>
        </p>
    </div>

    <section class="section" id="logo">
        <div class="content-section">
            <h2 class="sub-section">Acesso ao Painel Administrativo</h2>

            <div class="container-logo">
                <div class="logo standard">
                    <form action="validaLogin.php" method="POST">
                    <div class="label-float">
                        <input type="text" id="nome_usuario" name="nome_usuario" autocomplete="off" placeholder=" " required>
                        <label>Usuário</label>
                    </div>

                    <div class="label-float">
                        <input type="password" id="senha_usuario" name="senha_usuario" autocomplete="off" placeholder=" " required>
                        <label>Senha</label>
                    </div>                    
                    
                    <button class="btn-view-action transition-4 border-radius25" type="reset">Limpar</button>
                    <button class="btn-send transition-3 border-radius25" type="submit">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<div class="container-login">
<form action="validaLogin.php" method="POST">
<div class="form-group">
<label for="nome_usuario">Usuário:</label>
<input class="form-control" id="nome_usuario" type="text" name="nome_usuario">
</div>
<div class="form-group">
<label for="senha_usuario">Senha:</label>
<input class="form-control" id="senha_usuario" type="password" name="senha_usuario">
</div>

<br>

<input class="btn btn-outline-secondary btn-width" type="reset" name="limpar" value="Limpar">
<input class="btn btn-primary btn-width" type="submit" name="entrar" value="Entrar">
</form>
</div>

</body>
</html>