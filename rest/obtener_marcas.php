<?php
require "../librerias_php/setUp.php";

$marcas = R::getAll("
    SELECT m.id,m.nombre_marca FROM marcas AS m
");

echo json_encode($marcas);