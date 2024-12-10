<?php
require "../librerias_php/setUp.php";
$id = $_GET['id'];
$categoria = R::getRow("
    SELECT c.id,c.nombre_categoria FROM categorias AS c where c.id = ?
", [$id]);

echo json_encode($categoria);
