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
    "Drum Workshop",
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
$marcaBeans = [];
foreach ($marcas as $nombreMarca) {
    $marca = R::findOne('marcas', 'nombre_marca = ?', [$nombreMarca]);
    if (!$marca) {
        $marca = R::dispense('marcas');
        $marca->nombre_marca = $nombreMarca;
        R::store($marca);
    }
    $marcaBeans[$nombreMarca] = $marca;
}

// Crear o verificar categorías
$categoriaBeans = [];
foreach ($categorias as $nombreCategoria) {
    $categoria = R::findOne('categorias', 'nombre_categoria = ?', [$nombreCategoria]);
    if (!$categoria) {
        $categoria = R::dispense('categorias');
        $categoria->nombre_categoria = $nombreCategoria;
        R::store($categoria);
    }
    $categoriaBeans[$nombreCategoria] = $categoria;
}

// Relacionar marcas con categorías
foreach ($relaciones as $nombreMarca => $categoriasRelacionadas) {
    if (isset($marcaBeans[$nombreMarca])) {
        $marca = $marcaBeans[$nombreMarca];

        foreach ($categoriasRelacionadas as $nombreCategoria) {
            if (isset($categoriaBeans[$nombreCategoria])) {
                $categoria = $categoriaBeans[$nombreCategoria];

                // Verificar si la relación ya existe
                $existeRelacion = R::findOne(
                    'categoria_marca',
                    'marca_id = ? AND categoria_id = ?',
                    [$marca->id, $categoria->id]
                );

                if (!$existeRelacion) {
                    $relacion = R::dispense('categoria_marca');
                    $relacion->marca = $marca;
                    $relacion->categoria = $categoria;
                    R::store($relacion);
                }
            }
        }
    }
}

echo json_encode("ok");
