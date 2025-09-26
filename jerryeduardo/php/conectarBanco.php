<?php
    //servidor, usuario, senha, bd;
    $mysqli = new mysqli("localhost:3306","root","","portfolio");

    if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
    }
?>