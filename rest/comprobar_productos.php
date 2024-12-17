<?php
require "../librerias_php/setUp.php";
$cuentaInstrumentos = R::getAll("SELECT id FROM instrumentos limit 2");


if (count($cuentaInstrumentos) > 0) {
    echo json_encode("Instrumentos lleno");
} else {
    echo json_encode("vacio");
}
