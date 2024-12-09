<?php

require "../librerias_php/setUp.php";

$instrumentos = R::getAll("
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
        i.ventas > 0
    ORDER BY 
        i.ventas DESC
    LIMIT 8
");

echo json_encode($instrumentos);
