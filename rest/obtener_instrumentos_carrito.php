<?php
session_start();
if (isset($_SESSION["usuario"])) {
    // de cada id de producto que haya en el carrito, 
    // vamos a savar los datos de ese producto de base de datos
    // toda esa informacion sera la que le demos a la parte cliente

    require "../librerias_php/setUp.php";
    $ids = array();
    $cantidades = array();
    // Verificar si el carrito está definido y no está vacío
    if (isset($_SESSION["carrito"]) && is_array($_SESSION["carrito"])) {
        foreach ($_SESSION["carrito"] as $elemento) {
            if (isset($elemento[0]) && isset($elemento[1])) { // Validamos la estructura
                array_push($ids, $elemento[0]); // ID del producto
                array_push($cantidades, $elemento[1]); // Cantidad del producto
            }
        }
    }
    if (!empty($ids)) {
        array_multisort($ids, $cantidades);

        $id_sql = implode(",", $ids);
        $sql = "SELECT
                i.id,i.nombre_instrumento, i.precio, i.estado, i.gamma, i.descripcion, i.tipo,m.nombre_marca as marca, c.nombre_categoria as categoria
            FROM 
                instrumentos AS i
            JOIN 
                marcas AS m ON i.marca_id = m.id
            JOIN 
                categorias AS c ON i.categoria_id = c.id
            WHERE i.id IN ($id_sql)";

        $instrumentos = R::getAll($sql);
        $respuesta = array();


        for ($i = 0; $i < count($instrumentos); $i++) {
            array_push($respuesta, array("instrumento" => $instrumentos[$i], "cantidad" => $cantidades[$i]));
        }
        echo json_encode($respuesta);
    } else {
        // Si no hay IDs, devolvemos un array vacío
        echo json_encode(array());
    }
} else {
    // si no existe el carrito, le damos un array vacio
    echo json_encode(array());
}
