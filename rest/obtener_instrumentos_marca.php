<?php
require "../librerias_php/setUp.php";

$id = $_GET['id'];

$instrumento = R::getAll("
SELECT 
    i.id, 
        i.nombre_instrumento, 
        i.precio, 
        i.estado,
        m.nombre_marca as marca
FROM 
    instrumentos AS i
JOIN 
    marcas AS m ON i.marca_id = m.id
WHERE 
	i.marca_id = ? 
;", [$id]);

echo json_encode($instrumento);
