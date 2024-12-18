<?php session_start();
require "../librerias_php/setUp.php";
$id_instrumento = $_GET["id"];
$instrumento = R::findOne("instrumentos", "id = ?", [$id_instrumento]);
$marcas = R::getAll("SELECT * FROM marcas");
$categorias = R::getAll("SELECT * FROM categorias");
$tipos = R::getAll("SELECT DISTINCT tipo FROM instrumentos");
$gammas = R::getAll("SELECT DISTINCT gamma FROM instrumentos");
$marca_ruta = R::findOne("marcas", "id = ?", [$instrumento["marca_id"]]);
// print($instrumento);
// print($marca_ruta);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar instrumento</title>
    <link rel="stylesheet" href="../css/nuevoInstrumentoAdmin.css" />
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <div class="container">
        <h1 class="tituloEditar">Editar Instrumento</h1>
        <form action="guardar_cambios_instrumento.php" method="post" enctype="multipart/form-data" class="editForm">
            <div class="contImg">
                <img
                    style="max-width: 200px; max-height: 300px"
                    src="../imagenes/<?php echo $marca_ruta["nombre_marca"] ?>/instrumento/<?php echo $instrumento["id"] ?>.jpg"
                    alt="" />
            </div>
            <label for="nombre_instrumento">Nombre Instrumento:</label>
            <input type="text" id="nombre_instrumento" name="nombre_instrumento" value="<?php echo $instrumento["nombre_instrumento"]; ?>" />
            <div class="typeGamma">
                <label for="tipo" class="type">Tipo:</label>
                <select id="tipo" name="tipo" class="sType">
                    <?php
                    foreach ($tipos as $tipo) {
                        if ($instrumento["tipo"] == $tipo["tipo"]) { ?>
                            <option selected value="<?php echo $tipo["tipo"]; ?>"><?php echo $tipo["tipo"]; ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $tipo["tipo"]; ?>"><?php echo $tipo["tipo"]; ?></option>
                    <?php }
                    } ?>
                </select>
                <label for="gamma" class="gamma">Gamma:</label>
                <select name="gamma" id="gamma" class="sGamma">
                    <?php
                    foreach ($gammas as $gamma) {
                        if ($instrumento["gamma"] == $gamma["gamma"]) { ?>
                            <option selected value="<?php echo $gamma["gamma"]; ?>"><?php echo $gamma["gamma"]; ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $gamma["gamma"]; ?>"><?php echo $gamma["gamma"]; ?></option>
                    <?php }
                    } ?>
                </select>
            </div>
            <div class="brandCategorie">
                <label for="marca"" class=" brand">Marca:</label>
                <select name="marca" id="marca" class="sBrand">
                    <?php
                    foreach ($marcas as $marca) {
                        if ($marca["id"] == $instrumento["marca_id"]) { ?>
                            <option selected value="<?php echo $marca['nombre_marca']; ?>"><?php echo $marca['nombre_marca']; ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $marca['nombre_marca']; ?>"><?php echo $marca['nombre_marca']; ?></option>
                    <?php }
                    } ?>
                </select>
                <label
                    for="categoria"
                    class="categorie">Categoría:</label>
                <select
                    name="categoria"
                    id="categoria"
                    class="sCategorie">
                    <?php
                    foreach ($categorias as $categoria) {
                        if ($categoria["id"] == $instrumento["categoria_id"]) { ?>
                            <option selected value="<?php echo $categoria['nombre_categoria']; ?>"><?php echo $categoria['nombre_categoria']; ?></option>
                        <?php } else { ?>
                            <option value="<?php echo $categoria['nombre_categoria']; ?>"><?php echo $categoria['nombre_categoria']; ?></option>
                    <?php }
                    } ?>
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
                class="descripcion"><?php echo $instrumento["descripcion"]; ?></textarea>

            <div class="precio">
                <label for="precio">Precio:</label>
                <input
                    type="number"
                    name="precio"
                    id="precio"
                    step="0.1"
                    value="<?php echo $instrumento["precio"]; ?>" />
            </div>
            <p>
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" value="<?php echo $instrumento["estado"]; ?>" />
            </p>
            <div>
                <label for="ventas">Ventas: </label>
                <input
                    type="number"
                    id="ventas"
                    name="ventas"
                    required
                    value="<?php echo $instrumento["ventas"]; ?>" />
            </div>
            <input type="hidden" name="id" value="<?php echo $instrumento["id"]; ?>">
            <label for="foto" class="foto">Foto de instrumento</label>
            <input type="file" name="foto" id="foto" />
            <p>
                <input type="submit" value="Guardar Cambios" />
            </p>
        </form>
    </div>

</body>

</html>