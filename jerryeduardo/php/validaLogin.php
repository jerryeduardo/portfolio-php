<?php
    require_once 'conectarBanco.php';

    $nome_usuario = $_POST["nome_usuario"]; 
    $senha_usuario = $_POST["senha_usuario"];

    $sql = "SELECT * FROM usuario where nome_usuario = '$nome_usuario' LIMIT 1";

    $result = $mysqli -> query($sql);
    $row = $result -> fetch_assoc(); 

    if(password_verify($senha_usuario, $row["senha_usuario"])){
        echo "Password is valid!" ;
        header('Location: menu.php');

        $result -> free_result();
    } else {
        echo 'Invalid password.';
    }

    $mysqli -> close();
?>
