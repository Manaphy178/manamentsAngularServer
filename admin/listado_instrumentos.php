<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado instrumentos Admin</title>
    <link rel="stylesheet" href="../css/listadoInstrumentoAdmin.css">
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <div class="container">
        <h1 class="titleListado">Listado de productos de la tienda</h1>
        <table>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Categoría</th>
                    <th>Precio</th>
                    <th>Ventas</th>
                    <th>Gamma</th>
                    <th>Estado</th>
                    <th>Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($instrumentos as $instrumento) { ?>
                    <tr>
                        <td>
                            <img
                                style="height: 90px"
                                src="../imagenes/<?php echo $instrumento["marca"] ?>/instrumento/<?php echo $instrumento["id"] ?>.jpg"
                                alt="" />
                        </td>
                        <td><?php echo $instrumento["nombre_instrumento"] ?></td>
                        <td><?php echo $instrumento["marca"] ?></td>
                        <td><?php echo $instrumento["categoria"] ?></td>
                        <td><?php echo $instrumento["precio"] ?></td>
                        <td><?php echo $instrumento["ventas"] ?></td>
                        <td><?php echo $instrumento["gamma"] ?></td>
                        <td><?php echo $instrumento["estado"] ?></td>
                        <td>
                            <a onclick="return confirm('Estas seguro?')" href="?accion=eliminar&id=<?= $instrumento["id"] ?>">Eliminar Instrumento</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <a href="nuevo_instrumento.php">
        <div class="addButton">+</div>
    </a>

</body>

</html>