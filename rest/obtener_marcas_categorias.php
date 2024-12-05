<?php
require_once "../librerias_php/setUp.php";

// Obtener marcas y categorías
$marcas = R::findAll('marcas');
$categorias = R::findAll('categorias');

// Formatear los datos
$data = [
    'marcas' => array_map(function ($marca) {
        return ['id' => $marca->id, 'nombre' => $marca->nombre_marca];
    }, $marcas),
    'categorias' => array_map(function ($categoria) {
        return ['id' => $categoria->id, 'nombre' => $categoria->nombre_categoria];
    }, $categorias),
];

echo json_encode($data);
