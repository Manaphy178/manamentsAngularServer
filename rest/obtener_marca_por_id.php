<?php
require "../librerias_php/setUp.php";
$id = $_GET['id'];
$marca = R::getRow("
    SELECT m.id,m.nombre_marca FROM marcas AS m where m.id = ?
", [$id]);

echo json_encode($marca);
