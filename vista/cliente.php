<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link rel="stylesheet" href="../assets/css/cliente.css">
</head>

<body>

    <?php
    include("./header.php");
    ?>
    <main>
        <form class="contenedor_clientes">
            <div class="clientes">
                <h2>Clientes:</h2>

                <input type="text" name="buscar" id="" placeholder="Buscar">
                <input type="button" value="Buscar" class="btnbuscar">
                <a href="../"></a>

                <a href="../vista/agregarnuevocliente.php" class="btnnuevo">Nuevo</a>
            </div>
            <div class="listaclientes">
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Identificación</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>178-4828</td>
                            <td>Juan Perez</td>
                        </tr>
                        <td>786-8225</td>
                        <td>Maria Sovalbarro</td>
                        </tr>
                        <tr>
                            <td>78952-6888</td>
                            <td>Pedro Ramos</td>
                        </tr>
                        <tr>
                            <td>89285-595</td>
                            <td>Sofía Castro</td>
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