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
    ORDER BY 
        i.id DESC
");

echo json_encode($instrumentos);
