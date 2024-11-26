<?php
session_start();
if (isset($_SESSION["carrito"])) {
    // de cada id de producto que haya en el carrito, 
    // vamos a savar los datos de ese producto de base de datos
    // toda esa informacion sera la que le demos a la parte cliente

    require "../librerias_php/setUp.php";
    $ids = array();
    $cantidades = array();
    foreach ($_SESSION["carrito"] as $elemento) {
        array_push($ids, $elemento[0]); // 0 es la id
        array_push($cantidades, $elemento[1]); // 1 es la cantidad
    }
    array_multisort($ids, $cantidades);

    $id_sql = implode(",", $ids);
    $sql = "SELECT * FROM instrumentos WHERE id IN ($id_sql)";
    $instrumentos = R::getAll($sql);
    $respuesta = array();


    for ($i = 0; $i < count($instrumentos); $i++) {
        array_push($respuesta, array("instrumento" => $instrumentos[$i], "cantidad" => $cantidades[$i]));
    }
    echo json_encode($respuesta);
} else {
    // si no existe el carrito, le damos un array vacio
    echo json_encode(array());
}
