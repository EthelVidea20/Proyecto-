<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/presupuesto.css">
    <link rel="stylesheet" href="../assets/css/menu_lateral.css">

    <title>presupuesto</title>
</head>

<body>
    <?php
    include("./header.php");
    include "./menu_lateral.php";
    ?>
    <main>
        <form action="">
            <div class="contenedor_presupuesto">
                <div class="fechas">
                    <div class="finicio">
                        <label for="">Fecha Inicio:</label>
                        <input type="date" name="" id="">
                    </div>
                    <div class="ffinal">
                        <label for="">Fecha Final:</label>
                        <input type="date" name="" id="">
                    </div>
                </div>
                <div class="datos_principales">

                    <div class="nombre_presu">
                        <label for="">Nombre del Presupuesto</label>
                        <input type="text" name="" id="">
                    </div>
                    <div class="datos_saldo">
                        <label for="">Saldo Inicial:</label>
                        <input type="text" name="" id="">
                    </div>
                </div>
                <div class="ingreso_presupuesto">
                    <div class="agregar_presupuesto">
                        <label for="">Nombre del ingreso:</label>
                        <input type="text">
                    </div>
                    <div class="agregar_ingreso">
                        <label for="">Cantidad de ingreso:</label>
                        <input type="text">
                    </div>

                </div>
                <a href="#" class="btnnuevo">Nuevo</a>
            </div>
            

        </form>
    </main>
    <?php
    include("../vista/footer.php");
    ?>
</body>

</html>