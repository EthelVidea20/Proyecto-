<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/vistaproductos.css">
    <title>ListadoProductos</title>
</head>

<body>
    <?php
    include("./header.php");
    ?>
    <main>
        <form action="">
            <h1>Productos</h1>
            <div class="Busqueda">
                
                <input type="text" name="" id="" placeholder="Buscar">
                <input type="button" value="Buscar" class="btnBuscar">
                <input type="button" value="Refrescar/Todas" class="btnrefrescar">
                <input type="button" value="Nuevo" class="btnNuevo">

            </div>
           
            <div class="listadoproductos">
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Codigo Comercial</th>
                            <th>Tipo</th>
                            <th>Descripción Corta</th>
                            <th>Descripción</th>
                            <th>IVA</th>
                            <th>Precio</th>
                           

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>05</td>
                            <td>Servicio</td>
                            <td>Servicio Profesional</td>
                            <td>Servicios Profesionales</td>
                            <td>8%</td>
                            <td>2,500</td>
                          


                        </tr>

                    </tbody>
                </table>
            </div>
        </form>










    </main>
    <?php
    include("./footer.php");
    ?>
</body>

</html>