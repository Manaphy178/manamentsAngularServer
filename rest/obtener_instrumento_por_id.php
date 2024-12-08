<?php

require "../librerias_php/setUp.php";

$id = $_GET['id'];

$instrumento = R::getRow("
SELECT 
    i.id, 
    i.nombre_instrumento, 
    i.precio, 
    i.estado, 
    i.gamma, 
    i.descripcion, 
    i.tipo,
    m.nombre_marca as marca, 
    c.nombre_categoria as categoria
FROM 
    instrumentos AS i
JOIN 
    marcas AS m ON i.marca_id = m.id
JOIN 
    categorias AS c ON i.categoria_id = c.id
WHERE 
	i.id = ? 
LIMIT 1;", [$id]);

echo json_encode($instrumento);
