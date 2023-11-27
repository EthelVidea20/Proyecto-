<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <link rel="stylesheet" href="../assets/css/crearfactura.css">
</head>

<body>
    <?php
    include("./header.php");
    ?>
    <main>
        <form action="">
            <div class="factura">
                <div class="facturasdatos">
                    <H1>Facturas</H1>
                    <label for="">Cédula</label>
                    <input type="text" name="" id="" placeholder="Buscar">
                    <label for="">Código Artículo</label>
                    <input type="text" name="" id="" placeholder="Buscar">

                </div>
                <div class="facturasdatos1">

                    <label for="">Cliente</label>
                    <input type="text" name="" id="" placeholder="Buscar">
                    <label for="">Artículo</label>
                    <input type="text" name="" id="" placeholder="Buscar">

                </div>
                <div class="facturasdatos2">
                    <label for="">Moneda</label>
                    <select name="" id="">
                        <option>Córdoba</option>
                        <option>Dólar estadounidense </option>
                    </select>
                    <div class="facturadatos2y1">
                        <div class="facturacantidad">
                            <label for="">Cantidad</label>
                            <input type="text" name="" id="" placeholder="0">

                        </div>
                        <div class="facturaprecio">
                            <label for="">Precio antes de %</label>
                            <input type="text" name="" id="" placeholder="0">

                        </div>
                    </div>
                </div>
                <div class="facturasdatos3">
                    <label for="">Fecha</label>
                    <input type="date" name="" id="">
                    <label for="">Total</label>
                    <input type="text" name="" id="">
                </div>


            </div>
            <hr>
            <div class="facturacion">
                
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Artículo</th>
                            <th>Cantidad</th>
                            <th>Precio antes de %</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>178-4828</td>
                            <td>Alquiler</td>
                            <td>2</td>
                            <td>$150</td>
                            <td>$172.5</td>
                        </tr>
                        
                    </tbody>
                </table>
                <input type="button" value="Facturar" class="btnfacturar">
                
            </div>
            

        </form>










    </main>
    <?php
    include("./footer.php");
    ?>

</body>

</html>