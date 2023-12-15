<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/menu_lateral.css">
    <title>Principal</title>
</head>


<body>
    <?php include "./header.php" ?>
    <?php include "./menu_lateral.php" ?>

    <main class="contenedor">


        <div class="portada">

            <img src="../assets/img/portadagp.png" alt="">
        </div>

        <div class="botones">
            <p>GP es la mejor Herramienta para gestionar tus presupuestos,
                pudes facturar, ingresar tus ingresos todo en una sola pagina GP</p>
            <a href="../iniciosesion.php" class="btninicio">Inicia seccion</a>
            <input type="button" value="Registrate" class="btnregistrop">


        </div>
    </main>


    <?php
    include("../vista/footer.php");
    ?>
</body>