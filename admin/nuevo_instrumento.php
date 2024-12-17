<?php session_start();
require "../librerias_php/setUp.php";
$marcas = R::getAll("SELECT * FROM marcas");
$categorias = R::getAll("SELECT * FROM categorias");
$tipos = R::getAll("SELECT DISTINCT tipo FROM instrumentos");
$gammas = R::getAll("SELECT DISTINCT gamma FROM instrumentos")
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Registro de Instrumentos</title>
    <link rel="stylesheet" href="../css/nuevoInstrumentoAdmin.css" />
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <h1>Registro de Instrumentos</h1>
    <form action="registrar_instrumento.php" method="post" enctype="multipart/form-data" class="nuevoForm">
        <label for="nombre_instrumento">Nombre Instrumento:</label>
        <input type="text" id="nombre_instrumento" name="nombre_instrumento" />
        <div class="typeGamma">
            <label for="tipo" class="type">Tipo:</label>
            <select id="tipo" name="tipo" class="sType">
            <?php
                foreach ($tipos as $tipo) { ?>
                    <option value="<?php echo $tipo["tipo"]; ?>"><?php echo $tipo["tipo"]; ?></option>
                <?php } ?>
            </select>
            <label for="gamma" class="gamma">Gamma:</label>
            <select name="gamma" id="gamma" class="sGamma">
                <?php
                foreach ($gammas as $gamma) { ?>
                    <option value="<?php echo $gamma["gamma"]; ?>"><?php echo $gamma["gamma"]; ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="brandCategorie">
            <label for="marca"" class=" brand">Marca:</label>
            <select name="marca" id="marca" class="sBrand">
                <?php
                foreach ($marcas as $marca) { ?>
                    <option value="<?php echo $marca['nombre_marca']; ?>"><?php echo $marca['nombre_marca']; ?></option>
                <?php } ?>
            </select>
            <label
                for="categoria"
                class="categorie">Categoría:</label>
            <select
                name="categoria"
                id="categoria"
                class="sCategorie">
                <?php
                foreach ($categorias as $categoria) { ?>
                    <option value="<?php echo $categoria['nombre_categoria']; ?>"><?php echo $categoria['nombre_categoria']; ?></option>
                <?php } ?>
            </select>
        </div>
        <label
            class="descripcion"
            for="descripcion">Descripción</label>
        <textarea
            cols="20"
            rows="5"
            name="descripcion"
            id="descripcion"
            class="descripcion"></textarea>

        <div class="precio">
            <label for="precio">Precio:</label>
            <input
                type="number"
                name="precio"
                id="precio"
                step="0.1" />
        </div>
        <!-- meter ventas -->
        <p>
            <label for="estado">Estado:</label>
            <input type="text" id="estado" name="estado" />
        </p>
        <label for="foto" class="foto">Foto de instrumento</label>
        <input type="file" name="foto" id="foto" />
        <p>
            <input type="submit" value="Registrar" />
        </p>
    </form>
</body>

</html>