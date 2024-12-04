<?php
require "../librerias_php/setUp.php";
$cuenta = R::getAll("SELECT id FROM instrumentos limit 2");

if (count($cuenta) > 0) {
    echo json_encode("lleno");
} else {
    echo json_encode("vacio");
}
