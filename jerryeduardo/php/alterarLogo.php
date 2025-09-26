<?php
    require_once 'conectarBanco.php';
    require 'menu.php';

    $sql = "SELECT * FROM logo where id_logo=1";

    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();

    $id_logo = $row["id_logo"];
    $title_logo = $row["title_logo"];
    $alt_logo = $row["alt_logo"];
    $url_logo = $row["url_logo"];
    $width_logo = $row["width_logo"];
    $height_logo = $row["height_logo"];

    $result->free_result();
    $mysqli->close();
?>

<!doctype html>
<html lang="pt-br">
<head>
    <!-- Folha de Estilo -->
    <link href="../css/painel.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <section class="section" id="logo">
        <div class="content-section">
            <h1>Logo</h1>
            <div class="trace"></div>
            <h2 class="sub-section">Altere sua logo e também informações relevantes para indexação aos buscadores, e melhoria na experiência do usuário</h2>

            <div class="container-logo">
                <div class="logo standard">
                    <form action="sucessoLogo.php" method="POST">
                    <div class="label-float">
                    <input type="hidden" readonly="true" id="id_logo" name="id_logo" value="<?php echo $id_logo; ?>" required>
                    </div>

                    <div class="label-float">
                        <input type="text" id="title_logo" name="title_logo" autocomplete="off" placeholder=" " value="<?php echo $title_logo; ?>" required>
                        <label>Título</label>
                    </div>

                    <div class="label-float">
                        <input type="text" id="alt_logo" name="alt_logo" autocomplete="off" placeholder=" " value="<?php echo $alt_logo; ?>" required>
                        <label>Texto Alternativo</label>
                    </div>

                    <div class="label-float">
                        <input type="text" id="url_logo" name="url_logo" autocomplete="off" placeholder=" " value="<?php echo $url_logo; ?>" required>
                        <label>URL</label>
                    </div>

                    <div class="label-float">
                        <input type="text" id="width_logo" name="width_logo" autocomplete="off" placeholder=" " value="<?php echo $width_logo; ?>">
                        <label>Largura</label>
                    </div>

                    <div class="label-float label-altura">
                        <input type="text" id="height_logo" name="height_logo" autocomplete="off" placeholder=" " value="<?php echo $height_logo; ?>">
                        <label>Altura</label>
                    </div>

                    </div>
                    
                    <button class="btn-view-action transition-4 border-radius25" type="reset">Predefinição</button>
                    <button class="btn-send transition-3 border-radius25" type="submit">Alterar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="ajuda">
        <div class="container-ajuda">
            <span class="material-symbols-outlined">info</span>
            <p>É suportado por definição apenas logos com altura de 30px, ou seja, deverá informar no máximo até 30px no campo altura</p>
            <p>Os campos de largura e altura precisam serem preenchidos com px (pixels) ou % (porcentagem) no final. Exemplo: 150px ou 100%.</p>
        </div>
    </section>
</body>
</html>