<?php




?>

<!--CREACION DE PAGINA PRINCIPAL-->

<head>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<header>
    <div class="container_header">

        <div class="logo">
            <a href="../index.php">
                <img src="../assets/img/Logo_G_P.png" alt="">
            </a>
        </div>

        <div class="menu">
            <nav id="nav">
                <ul>

                    <li>Funcionalidades</li>
                    <li>Quienes somos</li>
                    <li>Registrate</li>
                    <li>Contacto</li>




                </ul>
                
                <input type="button" value="Registrate" class="btnregistro">

            </nav>

        </div>

    </div>

</header>

<body>
    <div class="contenedor">


        <div class="portada">

            <img src="../assets/img/portadagp.png" alt="">
        </div>

        <div class="botones">
            <p>GP es la mejor Herramienta para gestionar tus presupuestos,
                pudes facturar, ingresar tus ingresos todo en una sola pagina GP</p>
            <input type="button" value="Inicia seccion" class="btninicio">
            <input type="button" value="Registrate" class="btnregistro">

        </div>
    </div>


    <?php
        include("../vista/footer.php");
    ?>
</body>