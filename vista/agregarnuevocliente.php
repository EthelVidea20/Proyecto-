<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../assets/css/agregarnuevocliente.css">
</head>

<body>
    <?php
    include("./header.php");
    ?>
    <main>
        <form class="contenedor_nuevocliente" action="#">
            <div class="agregar_nuevocliente">
                <h2>Registro de Clientes</h2>
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
                <label for="direccion">Dirección</label>
                <input type="text" name="" id="" placeholder="Dirección">
                <label for="departamento">Departamento</label>
                <input type="text" name="" id="" placeholder="Departamento">
                <label for="Municipio">Municipio</label>
                <input type="text" name="" id="" placeholder="Municipio">
                <br>

                <br>
                <label for="Telefono">Teléfono</label>
                <input type="text" name="" id="" placeholder="Telefono">
                <label for="correo">Correo</label>
                <input type="text" name="" id="" placeholder="Correo">

                <input type="button" value="Guardar" class="btnguardar">
            </div>

        </form>
    </main>
</body>

</html>