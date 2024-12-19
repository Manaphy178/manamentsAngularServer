<?php
session_start();
require_once "../librerias_php/setUp.php";

if (!isset($_GET["id"])) {
    die("Producto no encontrado");
}

$id_instrumento = $_GET["id"];
$instrumento = R::load("instrumentos", $id_instrumento);

if ($instrumento->id == 0) {
    die("Producto no encontrado");
}

$bien = true;
$marca_original = R::findOne("marcas", "id = ?", [$instrumento->marca_id]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validaciones (mantenidas igual que antes)
    if (empty($_POST["nombre_instrumento"]) || !preg_match("/^[A-Za-z0-9 áéíóúñÁÉÍÓÚÑ.,-]{1,50}$/", $_POST["nombre_instrumento"])) {
        $bien = false;
        die("Error nombre instrumento");
    }
    if (empty($_POST["precio"]) || !is_numeric($_POST["precio"]) || $_POST["precio"] <= 0) {
        $bien = false;
        die("Error precio");
    }
    if (empty($_POST["descripcion"]) || !preg_match("/^[A-Za-z0-9 áéíóúñÁÉÍÓÚÑ.,'-]{1,200}$/", $_POST["descripcion"])) {
        $bien = false;
        die("Error descripción");
    }
    if (empty($_POST["tipo"]) || !preg_match("/^[A-Za-z0-9 áéíóúñÁÉÍÓÚÑ.,-]{1,20}$/", $_POST["tipo"])) {
        $bien = false;
        die("Error tipo");
    }
    if (empty($_POST["gamma"]) || !preg_match("/^[A-Za-z0-9 áéíóúñÁÉÍÓÚÑ.,-]{1,20}$/", $_POST["gamma"])) {
        $bien = false;
        die("Error gamma");
    }
    if (empty($_POST["ventas"]) || !is_numeric($_POST["ventas"]) || $_POST["ventas"] < 0) {
        $bien = false;
        die("Error ventas");
    }
    if (empty($_POST["estado"]) || !preg_match("/^[A-Za-z0-9 áéíóúñÁÉÍÓÚÑ.,-]{1,20}$/", $_POST["estado"])) {
        $bien = false;
        die("Error estado");
    }
    if (empty($_POST["marca"])) {
        $bien = false;
        die("Error marca");
    }
    if (empty($_POST["categoria"])) {
        $bien = false;
        die("Error categoria");
    }

    if ($bien) {
        $instrumento->nombre_instrumento = $_POST["nombre_instrumento"];
        $instrumento->precio = $_POST["precio"];
        $instrumento->descripcion = $_POST["descripcion"];
        $instrumento->tipo = $_POST["tipo"];
        $instrumento->gamma = $_POST["gamma"];
        $instrumento->ventas = $_POST["ventas"];
        $instrumento->estado = $_POST["estado"];
        $instrumento->marca_id = $_POST["marca"];
        $instrumento->categoria_id = $_POST["categoria"];

        // Manejo de la imagen
        $nueva_marca = R::findOne("marcas", "id = ?", [$instrumento->marca_id]);
        $imagen_original = "../imagenes/" . $marca_original->nombre_marca . "/instrumento/" . $instrumento->id . ".jpg";
        $nueva_imagen_path = "../imagenes/" . $nueva_marca->nombre_marca . "/instrumento/" . $instrumento->id . ".jpg";

        if ($_FILES["foto"]["error"] == UPLOAD_ERR_OK) {
            // Si se subió una nueva imagen
            if (file_exists($imagen_original)) {
                unlink($imagen_original);
            }
            move_uploaded_file($_FILES["foto"]["tmp_name"], $nueva_imagen_path);
        } elseif ($marca_original->id != $nueva_marca->id) {
            // Si la marca cambió pero no se subió una nueva imagen
            if (file_exists($imagen_original)) {
                // Asegúrate de que el directorio de destino existe
                $dir_destino = dirname($nueva_imagen_path);
                if (!is_dir($dir_destino)) {
                    mkdir($dir_destino, 0755, true);
                }
                rename($imagen_original, $nueva_imagen_path);
            }
        }

        try {
            R::store($instrumento);
            header("Location: registro_ok.php");
            exit;
        } catch (Exception $e) {
            die("Error al guardar el instrumento: " . $e->getMessage());
        }
    }
}

$marcas = R::getAll("SELECT * FROM marcas");
$categorias = R::getAll("SELECT * FROM categorias");
$tipos = R::getAll("SELECT DISTINCT tipo FROM instrumentos");
$gammas = R::getAll("SELECT DISTINCT gamma FROM instrumentos");
$marca_actual = R::findOne("marcas", "id = ?", [$instrumento->marca_id]);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar instrumento</title>
    <link rel="stylesheet" href="../css/nuevoInstrumentoAdmin.css" />
    <link rel="icon" type="image/x-icon" href="../imagenes/favicon.ico" />
</head>

<body>
    <?php include("menu.php"); ?>
    <div class="container">
        <h1 class="tituloEditar">Editar Instrumento</h1>
        <form action="editar_instrumento.php?id=<?php echo $instrumento->id; ?>" method="post" enctype="multipart/form-data" class="editForm">
            <div class="contImg">
                <?php
                $imagen_path = "../imagenes/" . $marca_actual->nombre_marca . "/instrumento/" . $instrumento->id . ".jpg";
                if (file_exists($imagen_path)) {
                    echo "<img style='max-width: 200px; max-height: 300px' src='$imagen_path' alt='Imagen del instrumento' />";
                } else {
                    echo "<p>No hay imagen asignada</p>";
                }
                ?>
            </div>
            <label for="nombre_instrumento">Nombre Instrumento:</label>
            <input type="text" id="nombre_instrumento" name="nombre_instrumento" value="<?php echo $instrumento->nombre_instrumento; ?>" />
            <div class="typeGamma">
                <label for="tipo" class="type">Tipo:</label>
                <select id="tipo" name="tipo" class="sType">
                    <?php foreach ($tipos as $tipo): ?>
                        <option value="<?php echo $tipo["tipo"]; ?>" <?php echo ($instrumento->tipo == $tipo["tipo"]) ? 'selected' : ''; ?>>
                            <?php echo $tipo["tipo"]; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label for="gamma" class="gamma">Gamma:</label>
                <select name="gamma" id="gamma" class="sGamma">
                    <?php foreach ($gammas as $gamma): ?>
                        <option value="<?php echo $gamma["gamma"]; ?>" <?php echo ($instrumento->gamma == $gamma["gamma"]) ? 'selected' : ''; ?>>
                            <?php echo $gamma["gamma"]; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="brandCategorie">
                <label for="marca" class="brand">Marca:</label>
                <select name="marca" id="marca" class="sBrand">
                    <?php foreach ($marcas as $marca): ?>
                        <option value="<?php echo $marca['id']; ?>" <?php echo ($marca['id'] == $instrumento->marca_id) ? 'selected' : ''; ?>>
                            <?php echo $marca['nombre_marca']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label for="categoria" class="categorie">Categoría:</label>
                <select name="categoria" id="categoria" class="sCategorie">
                    <?php foreach ($categorias as $categoria): ?>
                        <option value="<?php echo $categoria['id']; ?>" <?php echo ($categoria['id'] == $instrumento->categoria_id) ? 'selected' : ''; ?>>
                            <?php echo $categoria['nombre_categoria']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <label class="descripcion" for="descripcion">Descripción</label>
            <textarea cols="20" rows="5" name="descripcion" id="descripcion" class="descripcion"><?php echo $instrumento->descripcion; ?></textarea>
            <div class="precio">
                <label for="precio">Precio:</label>
                <input type="number" name="precio" id="precio" step="0.01" value="<?php echo $instrumento->precio; ?>" />
            </div>
            <p>
                <label for="estado">Estado:</label>
                <input type="text" id="estado" name="estado" value="<?php echo $instrumento->estado; ?>" />
            </p>
            <div>
                <label for="ventas">Ventas: </label>
                <input type="number" id="ventas" name="ventas" required value="<?php echo $instrumento->ventas; ?>" />
            </div>
            <label for="foto" class="foto">Foto de instrumento</label>
            <input type="file" name="foto" id="foto" />
            <p>
                <input type="submit" value="Guardar Cambios" />
            </p>
        </form>
    </div>
</body>

</html>