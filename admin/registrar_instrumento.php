<?php
require "../librerias_php/setUp.php";

$instrumento = R::dispense("instrumentos");
$instrumento->nombre_instrumento = $_POST["nombre_instrumento"];
$instrumento->precio = $_POST["precio"];
$instrumento->descripcion = $_POST["descripcion"];
$instrumento->marca = $_POST["marca"];
$instrumento->categoria = $_POST["categoria"];
$instrumento->tipo = $_POST["tipo"];
$instrumento->gamma = $_POST["gamma"];
$instrumento->estado = $_POST["estado"];


$id_generada = R::store($instrumento);
move_uploaded_file($_FILES["foto"]["tmp_name"], "../imagenes/" . $id_generada . ".jpg");

include("registro_ok.php");
