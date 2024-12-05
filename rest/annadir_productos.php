<?php
require_once "../librerias_php/setUp.php";
$data = json_decode(file_get_contents("php://input"), true);
$categorias = $data['categorias'] ?? [];
$marcas = $data['marcas'] ?? [];

$instrumentos = [
    [
        "nombre_instrumento" => "Guitarra",
        "precio" => 100,
        "descripcion" => "Guitarra acústica",
        "marca" => "Yamaha",
        "categoria" => "Cuerdas",
        "tipo" => "Acústica",
        "gamma" => "Media",
        "estado" => "Nuevo",
    ],
    [
        "nombre_instrumento" => "Piano",
        "precio" => 500,
        "descripcion" => "Piano digital",
        "marca" => "Casio",
        "categoria" => "Teclas",
        "tipo" => "Digital",
        "gamma" => "Alta",
        "estado" => "Nuevo",
    ],
];

foreach ($instrumentos as $instrumento) {
    $bean = R::dispense('instrumentos');

    foreach ($instrumento as $key => $value) {
        if ($key === 'marca') {
            $marca = array_filter($marcas, fn($m) => $m['nombre'] === $value);
            if (!empty($marca)) {
                $bean->marca = R::load('marcas', $marca[0]['id']);
            }
        } elseif ($key === 'categoria') {
            $categoria = array_filter($categorias, fn($c) => $c['nombre'] === $value);
            if (!empty($categoria)) {
                $bean->categoria = R::load('categorias', $categoria[0]['id']);
            }
        } else {
            $bean->$key = $value;
        }
    }

    R::store($bean);
}
echo json_encode("ok");



// $marcas = [
//     [
//         "id" => 1,
//         "nombre_marca" => "Yamaha"
//     ],
//     [
//         "id" => 2,
//         "nombre_marca" => "Roland"
//     ]
// ];

// $categorias = [
//     [
//         "id" => 1,
//         "nombre_categoria" => "Guitarra"
//     ],
//     [
//         "id" => 2,
//         "nombre_categoria" => "Bajo"
//     ]
// ];

// $instrumentos = [
//     [
//         "nombre_instrumento" => "Guitarra",
//         "precio" => 100,
//         "descripcion" => "Guitarra acústica",
//         "marca_id" => "Yamaha",
//         "categoria_id" => "Cuerdas",
//         "tipo" => "Acústica",
//         "gamma" => "Media",
//         "estado" => "Nuevo"
//     ],
//     [
//         "nombre_instrumento" => "Piano",
//         "precio" => 500,
//         "descripcion" => "Piano digital",
//         "marca" => "Casio",
//         "categoria" => "Teclas",
//         "tipo" => "Digital",
//         "gamma" => "Alta",
//         "estado" => "Nuevo"
//     ]
// ];

// Definir la relación entre instrumentos y marcas
// $instrumento->belongs_to('marca');
// $marca->has_many('instrumentos');

// // Definir la relación entre instrumentos y categorías
// $instrumento->belongs_to('categoria');
// $categoria->has_many('instrumentos');
// // Crear la tabla instrumentos con las columnas adicionales
// R::exec('
//     CREATE TABLE instrumentos (
//         id INT PRIMARY KEY,
//         nombre VARCHAR(255),
//         precio DECIMAL(10, 2),
//         descripcion TEXT,
//         marca_id INT,
//         categoria_id INT,
//         FOREIGN KEY (marca_id) REFERENCES marcas(id),
//         FOREIGN KEY (categoria_id) REFERENCES categorias(id)
//     );
// ');// Agregar un instrumento a una marca y categoría
// $instrumento->marca = $marca;
// $instrumento->categoria = $categoria;
// R::store($instrumento);// Obtener la marca de un instrumento
// $marca = $instrumento->marca;

// // Obtener la categoría de un instrumento
// $categoria = $instrumento->categoria;