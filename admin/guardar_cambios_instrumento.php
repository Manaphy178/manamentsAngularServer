<?php
session_start();
require '../librerias_php/rb-mysql.php';
$id = $_POST["id"];
echo ($id);
$instrumento = R::findOne("instrumentos", "id = ?", $id);
echo ($instrumento);
$marca = R::findOne('marcas', 'id = ?', [$instrumento->marca_id]);
echo ($marca);
$archivo = ('../imagenes/' . $marca->nombre_marca . '/instrumento/' . $instrumento->id . '.jpg');
if (file_exists($archivo)) {
    echo "El archivo existe";
    unlink("../imagenes/" . $marca->nombre_marca . "/instrumento/" . $instrumento->id . ".jpg");
}

$instrumento->nombre_instrumento = $_POST["nombre_instrumento"];
$instrumento->precio = $_POST["precio"];
$instrumento->descripcion = $_POST["descripcion"];
$instrumento->tipo = $_POST["tipo"];
$instrumento->gamma = $_POST["gamma"];
$instrumento->ventas = $_POST["ventas"];
$instrumento->estado = $_POST["estado"];
$nombreMarca = $_POST["marca"];
$marca = R::findOne('marcas', 'nombre_marca = ?', [$nombreMarca]);
$instrumento->marca = $marca; // Vincular la marca al instrumento
$nombreCategoria = $_POST["categoria"];
$categoria = R::findOne('categorias', 'nombre_categoria = ?', [$nombreCategoria]);
$instrumento->categoria = $categoria; // Vincular la categoría al instrumento
echo ($instrumento);

$sql = "UPDATE instrumentos SET 
        nombre_instrumento = ?, 
        precio = ?, 
        descripcion = ?, 
        tipo = ?, 
        gamma = ?, 
        ventas = ?, 
        estado = ?, 
        marca_id = ?, 
        categoria_id = ? 
        WHERE id = ?";

R::exec($sql, [
    $instrumento->nombre_instrumento,
    $instrumento->precio,
    $instrumento->descripcion,
    $instrumento->tipo,
    $instrumento->gamma,
    $instrumento->ventas,
    $instrumento->estado,
    $marca->id,
    $categoria->id,
    $instrumento->id
]);



move_uploaded_file($_FILES["foto"]["tmp_name"], "../imagenes/" . $marca->nombre_marca . "/instrumento/" . $instrumento->id . ".jpg");
include("gestionar_instrumento.php");
