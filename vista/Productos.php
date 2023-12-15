<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="../assets/css/productos.css">
    <link rel="stylesheet" href="../assets/css/menu_lateral.css">
</head>

<body>
    <?php
    include("./header.php");
    include "./menu_lateral.php";
    
    ?>
    <main>
        <form action="">
            <fieldset>
                <legend><h1>Productos</h1></legend>
                
                <div class="contenedorproductos">

                    <label for="">Código Comercial</label>
                    <input type="text" name="" id="" placeholder="Código Comercial">
                    <label for="">Tipo de Código</label>
                    <select name="" id="">
                        <option>Codigo del vendedor</option>
                        <option>Codigo del comprador</option>
                    </select>

                </div>
                <div class="informacion">
                    <h2>Tipo:</h2>
                    <input type="radio" name="tipo" id="" value="producto">
                    <label for="tipo1">Producto</label>
                    <input type="radio" name="tipo" id="" value="servicio">
                    <label for="tipo2">Servicio</label>

                    <label for="">Descripción</label>
                    <input type="text" name="" id="" placeholder="Descripción">

                    <label for="">Unidad de medida</label>
                    <select name="" id="">
                        <option>Unidad</option>
                        <option>Servicios Profesionales</option>
                        <option>Libra</option>
                        <option>Litros</option>
                        <option>Kilo</option>
                        <option>Hora</option>
                        <option>Alquiler</option>
                        <option>Comisiones</option>
                        <option>Metro</option>
                        <option>Centimetro</option>
                        <option>Día</option>
                        <option>Gramos</option>
                        <option>Intereses</option>
                        <option>Servicios Técnicos </option>
                    </select>
                    <br>
                    <br>
                    <label for="">Agregar<br>Impuesto</label>
                    <input type="text" name="" id="" placeholder="Agregar ">
                    <label for="">Costo</label>
                    <input type="text" name="" id="" placeholder="Costo">
                    <label for="">Costo después de impuesto</label>
                    <input type="text" name="" id="" placeholder="Costo después">
                </div>
                <input type="button" value="Guardar" class="btnguardar">
            </fieldset>
        </form>

    </main>
    <?php
    include("./footer.php");
    ?>
</body>

</html>