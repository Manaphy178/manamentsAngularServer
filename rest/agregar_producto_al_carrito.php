<?php
// el carrito vamos a gestionarlo en sesion
// la sesion, a no ser que se diga lo contrario, se guarda 
// en forma de coockies encriptadas en el cliente

// para usar la sesion en php. es obligatorio tener la siguiente linea, antes de mandar nada al cliente
session_start();


// recoger la id y cantidad enviada por el cliente
// angular siempre va a mandar al servidor json
$json_recibido = json_decode(file_get_contents("php://input"));


// validar que la id y cantidad recibidas sean dos numeros:
if (!isset($json_recibido->id) || !isset($json_recibido->cantidad)) {
    die();
    // die para la ejecucion de php
}
if (! is_int($json_recibido->id) || ! is_integer($json_recibido->cantidad)) {
    die();
}


$id_producto = $json_recibido->id;
$cantidad = $json_recibido->cantidad;

// vamos a guardar el carrito en una variable de sesion, si no existe la creamos
if (isset($_SESSION["usuario"])) {
    if (!isset($_SESSION["carrito"])) {
        $_SESSION["carrito"] = array();
    }
}else{
    echo json_encode("No iniciaste sesion");
    die();
}

// en $_SESSION["carrito"] es un array donde cada elemento va a ser un array
// dicho array tendra en su primera posicion la id de producto y en su segunda la cantidad

$producto_en_carrito = false;
for ($i = 0; $i < count($_SESSION["carrito"]); $i++) {
    // vamos a ver si en el carrito ya esta el producto indicado
    if ($_SESSION["carrito"][$i][0] == $id_producto) {
        $producto_en_carrito = true;
        $_SESSION["carrito"][$i][1] += $cantidad;
        break;
    }
}

// si el producto no esta en el carrito:
if (!$producto_en_carrito) {
    array_push($_SESSION["carrito"], array($id_producto, $cantidad));
}
echo json_encode("ok");
