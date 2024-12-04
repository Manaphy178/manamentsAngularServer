<?php
require "../librerias_php/setUp.php";
$cuentaInstrumentos = R::getAll("SELECT id FROM instrumentos limit 2");
$cuentaMarcas = R::getAll("SELECT id FROM marcas limit 2");
$cuentaCategorias = R::getAll("SELECT id FROM categorias limit 2");

if (count($cuentaInstrumentos) > 0) {
    echo json_encode("Instrumentos lleno");
} else if (count($cuentaMarcas) > 0) {
    echo json_encode("Marcas llenas");
} else if (count($cuentaCategorias) > 0) {
    echo json_encode("Categorias llenas");
} else {
    echo json_encode("vacio");
}
