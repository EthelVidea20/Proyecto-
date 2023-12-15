<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../assets/css/agregarproveedor.css">
    <link rel="stylesheet" href="../assets/css/menu_lateral.css">
</head>

<body>
    <?php
    include("./header.php");
    include "./menu_lateral.php";
    ?>
    <main>
        <form class="contenedor_nuevoproveedor" action="#">
            <div class="agregar_nuevoproveedor">
                <h1>Registro de Proveedor</h1>

                <div class="datosproveedor">


                    <select name="" id="">
                        <option>Cedula Física </option>
                        <option>Cedula Jurídica </option>
                        <option>Pasaporte</option>
                    </select>
                    <label for="identificacion">Identificación</label>
                    <input type="text" name="" id="" placeholder="Identificación">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="" id="" placeholder="Nombre">
                    <br>
                    <br>
                    <label for="correo">Correo</label>
                    <input type="text" name="" id="" placeholder="Correo">
                    <label for="departamento">Departamento</label>
                    <input type="text" name="" id="" placeholder="Departamento">
                    <label for="Municipio">Municipio</label>
                    <input type="text" name="" id="" placeholder="Municipio">
                    <br>

                    <br>
                    <label for="direccion">Dirección</label>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Dirección"></textarea>
                   
                    <label for="Telefono">Teléfono</label>
                    <input type="text" name="" id="" placeholder="Telefono">

                </div>
                <input type="button" value="Guardar" class="btnguardar">
            </div>

        </form>
    </main>
    <?php
        include("./footer.php");
    ?>
</body>

</html>