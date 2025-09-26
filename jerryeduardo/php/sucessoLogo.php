<?php
    require_once 'conectarBanco.php';

    $id_logo = $_POST["id_logo"];
    $title_logo = $_POST["title_logo"];
    $alt_logo = $_POST["alt_logo"];
    $url_logo = $_POST["url_logo"];

    //concatenação da largura/altura com o atributo px ou %
    $width_logo = $_POST["width_logo"];
    $height_logo = $_POST["height_logo"];

    $sql = "UPDATE logo SET title_logo = '" . $title_logo . "', alt_logo = '" . $alt_logo . "', url_logo ='" . $url_logo . "', 
    width_logo ='" . $width_logo . "', height_logo ='" . $height_logo . "' WHERE id_logo = " . $id_logo;
    
    $mysqli->query($sql);
    $mysqli->close();

    header('Location: sucessoAlteracao.php');
?>