<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado instrumentos Admin</title>
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <h1>Listado de Instrumentos</h1>
    <div>
        <!-- se itera sobre el array de instrumentos y se muestra cada uno
             los valores se pueden acceder con $instrumento["nombre"] o $instrumento->nombre
             ya que cada elemento del array es un objetoInstrumento -->
        <?php foreach ($instrumentos as $instrumento) { ?>
            <div style="margin:10px">
                <p>Nombre: <?php echo $instrumento["nombre_instrumento"] ?></p>
                <p>Precio: <?php echo $instrumento["precio"] ?></p>
                <p>Categoría: <?php echo $instrumento["categoria"] ?></p>
                <p>Marca: <?php echo $instrumento["marca"] ?></p>
                <p>Tipo: <?php echo $instrumento["tipo"] ?></p>
                <p>Gamma: <?php echo $instrumento["gamma"] ?></p>
                <p>Descripción: <?php echo $instrumento["descripcion"] ?></p>
                <img src="../imagenes/instrumentos/<?php echo $instrumento["id"] ?>.jpg" height="120px">
                <br>
                <a onclick="return confirm('Estas seguro?')" href="?accion=eliminar&id=<?= $instrumento["id"] ?>">Eliminar</a>
            </div>
        <?php } ?>
    </div>

</body>

</html>