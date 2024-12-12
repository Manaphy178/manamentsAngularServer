<?php
require "../librerias_php/setUp.php";
$cuentaMarcas = R::getAll("SELECT id FROM marcas limit 2");
$cuentaCategorias = R::getAll("SELECT id FROM categorias limit 2");

if (count($cuentaMarcas) > 0 && count($cuentaCategorias) > 0) {
    echo json_encode("ok");
} else {
    echo json_encode("crear");
}
