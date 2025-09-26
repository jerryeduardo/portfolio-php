<!doctype html>
<html lang="pt-br">
<head>
<?php require 'meta.php'; ?>

    <!-- Folha de Estilo -->
    <link href="../css/menu.css" rel="stylesheet">
</head>

<style>
    .container{
        margin: 50px;
        width: 100%;
        height: auto;
        text-align: center;
        display: inline-block;
    
    }
    .container p{
        font-family: 'Mulish', sans-serif;
        color: black;
    }
    .container img{
        width: 35px;
    }
    .container a{
        font-size: 20px;
        color: rgb(0, 113, 201);
    }
</style>

<body>
    <div class="menu">
        <div class="title"><h2>Cabeçalho</h2>
            <div class="page btn link">
                <p><a href="alterarLogo.php" title="Logo">Logo</a></p>
                <p><a href="alterarMenu.php" title="Menu">Menu</a></p>
                <p><a href="alterarTexto.php" title="Texto">Texto</a></p>
                <p><a href="alterarBanner.php" title="Banner">Banner</a></p>
                <p><a href="alterarCards.php" title="Cards">Cards</a></p>
            </div>
        </div>
    </div>

    <div class="container link">
        <img src="../images/icons/certo.png" />
        <p>Alteração feita com sucesso!</p>
        <p>Visualize acessando o link ao lado: <a href="../index.php">Página Inicial</a></p>
    </div>
</body>
</html>