<?php
    //abre conexao com o banco 
    require_once 'conectarBanco.php';

    $nome_usuario = $_POST["nome_usuario"];
    $senha_usuario = password_hash($_POST["senha_usuario"], PASSWORD_DEFAULT);

    //monta sql para o banco de dados
    $sql = "INSERT INTO usuario (nome_usuario, senha_usuario) VALUES ('" . $nome_usuario . "','" . $senha_usuario. "')";

    $mysqli->query($sql);
    $mysqli->close();

    header('Location: index.php');
?>