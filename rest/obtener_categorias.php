<?php
require "../librerias_php/setUp.php";

$categorias = R::getAll("
    SELECT c.id,c.nombre_categoria FROM categorias AS c
");

echo json_encode($categorias);
