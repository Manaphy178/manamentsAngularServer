<?php
session_start();
require "../librerias_php/setUp.php";
$instrumento = R::dispense("instrumentos");
$instrumento->nombre_instrumento = $_POST["nombre_instrumento"];
$instrumento->precio = $_POST["precio"];
$instrumento->descripcion = $_POST["descripcion"];
$instrumento->tipo = $_POST["tipo"];
$instrumento->gamma = $_POST["gamma"];
$instrumento->estado = $_POST["estado"];

// Manejar la relación con la marca
$nombreMarca = $_POST["marca"];
$marca = R::findOne('marcas', 'nombre_marca = ?', [$nombreMarca]);
$instrumento->marca = $marca; // Vincular la marca al instrumento
$nombreCategoria = $_POST["categoria"];
$categoria = R::findOne('categorias', 'nombre_categoria = ?', [$nombreCategoria]);
$instrumento->categoria = $categoria; // Vincular la categoría al instrumento

$id_generada = R::store($instrumento);
move_uploaded_file($_FILES["foto"]["tmp_name"], "../imagenes/" . $marca->nombre_marca . "/instrumento/" . $id_generada . ".jpg");

include("registro_ok.php");
