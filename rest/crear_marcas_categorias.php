<?php
require_once "../librerias_php/setUp.php";

// Lista de marcas y categorías
$marcas = [
    "Yamaha",
    "Roland",
    "Korg",
    "Casio",
    "Fender",
    "Gibson",
    "Ibanez",
    "Pearl",
    "DrumWorkshop",
    "Meinl"
];
$categorias = [
    "Guitarra",
    "Bajo",
    "Bateria",
    "Cuerda",
    "Viento",
    "Percusion",
    "Piano",
    "Sintetizador"
];

// Relación de categorías y marcas
$relaciones = [
    "Yamaha" => [
        "Cuerda",
        "Piano",
        "Guitarra",
        "Bajo",
        "Bateria",
        "Sintetizador",
        "Viento",
        "Percusion"
    ],
    "Roland" => [
        "Viento",
        "Piano",
        "Percusion",
        "Sintetizador",
        "Bateria"
    ],
    "Korg" => [
        "Piano",
        "Sintetizador"
    ],
    "Casio" => [
        "Piano",
        "Sintetizador"
    ],
    "Fender" => [
        "Guitarra",
        "Bajo"
    ],
    "Gibson" => [
        "Guitarra",
        "Bajo"
    ],
    "Ibanez" => [
        "Guitarra",
        "Bajo"
    ],
    "Pearl" => [
        "Percusion",
        "Bateria"
    ],
    "DrumWorkshop" => [
        "Percusion",
        "Bateria"
    ],
    "Meinl" => [
        "Percusion"
    ]
];

// Crear o verificar marcas
foreach ($marcas as $nombreMarca) {
    $marca = R::findOne('marcas', 'nombre_marca = ?', [$nombreMarca]);
    if (!$marca) {
        $marca = R::dispense('marcas');
        $marca->nombre_marca = $nombreMarca;
        R::store($marca);
    }
}
echo ("");
echo ("se han creado las marcas ");

// Crear o verificar categorías

foreach ($categorias as $nombreCategoria) {
    $categoria = R::findOne('categorias', 'nombre_categoria = ?', [$nombreCategoria]);
    if (!$categoria) {
        $categoria = R::dispense('categorias');
        $categoria->nombre_categoria = $nombreCategoria;
        R::store($categoria);
    }
}
echo ("");
echo ("se han creado las categorias ");



echo json_encode("ok");
