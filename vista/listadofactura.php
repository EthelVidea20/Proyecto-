<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ListadoFacturas</title>
    <link rel="stylesheet" href="../assets/css/listado_facturas.css">
    <link rel="stylesheet" href="../assets/css/menu_lateral.css">
</head>

<body>
    <?php
    include("./header.php");
    include "./menu_lateral.php";
    ?>
    <main>
        <form action="">
            <div class="listado_factura">
                <h1>FACTURAS</h1>
                <div class="Busqueda">
                    <select name="" id="">
                        <option>N° Documento</option>
                        <option>Identificación de Cliente</option>
                        <option>Nombre de Cliente</option>
                    </select>
                    <input type="text" name="" id="" placeholder="Buscar">
                    <div class="filtrobusquedafecha">
                        <input type="date" name="" id="">
                        <input type="date" name="" id="">
                    </div>
                </div>

                <div class="botones_factura">
                    <a href="#" class="btnBuscar">Buscar</a>
                    <a href="#" class="btnrefrescar">Refrescar/Todas</a>
                    <a href="./crearfactura.php" class="btnNuevo">Nuevo</a>
                </div>
                <div class="listadofacturas">
                    <table class="content-table">
                        <thead>
                            <tr>
                                <th>Numero</th>
                                <th>Identificación</th>
                                <th>Cliente</th>
                                <th>Fecha</th>
                                <th>Moneda</th>
                                <th>Medio de pago</th>
                                <th>Monto</th>
                                <th>Saldo</th>
                                <th>Estado</th>
                                <th>Correo</th>
                                <th>Anulado</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1162-2058-8779N</td>
                                <td>Juan Perez</td>
                                <td>06/10/2023</td>
                                <td>Cordobas</td>
                                <td>Transferencia</td>
                                <td>2,500</td>
                                <td>0</td>
                                <td>Aceptada</td>
                                <td>jr34@gmail.com</td>
                                <td>No</td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </main>
    <?php
    include("./footer.php");
    ?>
</body>

</html>