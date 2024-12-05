<?php
session_start();
require_once "../librerias_php/setUp.php";

$json_recibido = json_decode(file_get_contents("php://input"));

// validacion:
if (
    !isset($json_recibido->nombre) ||
    !isset($json_recibido->telefono) ||
    !isset($json_recibido->direccion) ||
    !isset($json_recibido->provincia) ||
    !isset($json_recibido->poblacion) ||
    !isset($json_recibido->tipotarjeta) ||
    !isset($json_recibido->numerotarjeta) ||
    !isset($json_recibido->titulartarjeta) ||
    !isset($json_recibido->fechacaducidad) ||
    !isset($json_recibido->ccv)
) {
    die("Error");
}
// expresiones regulares en php
// nombre
if (! preg_match("/[a-z áéíóúñ]{2,20}$/i", $json_recibido->nombre)) {
    die("nombre no aceptado desde el servidor");
}
// telefono
if (! preg_match("/[0-9]{9,15}$/", $json_recibido->telefono)) {
    die("telefono no aceptado desde el servidor");
}
// direccion
if (! preg_match("/[a-z áéíóúñ0-9,.:ªº]{2,30}$/i", $json_recibido->direccion)) {
    die("direccion no aceptada desde el servidor");
}
// provincia
if (! preg_match("/[a-z áéíóúñ]{2,50}$/i", $json_recibido->provincia)) {
    die("provincia no aceptada desde el servidor");
}
// poblacion
if (! preg_match("/[a-z áéíóúñ]{2,50}$/i", $json_recibido->poblacion)) {
    die("poblacion no aceptada desde el servidor");
}
// numero de tarjeta
if (! preg_match("/[0-9]{16,24}$/", $json_recibido->numerotarjeta)) {
    die("numero de tarjeta no aceptado desde el servidor");
}
if (! preg_match("/[a-z áéíóúñ]{2,50}$/", $json_recibido->titulartarjeta)) {
    die("titular de tarjeta no aceptado desde servidor");
}
if (! preg_match("/(0[1-9]|1[0-2])\/\d{2}$/", $json_recibido->fechacaducidad)) {
    die("fecha de caducidad no aceptado desde servidor");
}

if (! preg_match("/[0-9]{3,4}$/", $json_recibido->ccv)) {
    die("ccv no aceptado desde el servidor");
}


$pedido = R::dispense("pedidos");
$pedido->nombre = $json_recibido->nombre;
$pedido->telefono = $json_recibido->telefono;
$pedido->direccion = $json_recibido->direccion;
$pedido->provincia = $json_recibido->provincia;
$pedido->poblacion = $json_recibido->poblacion;
$pedido->tipotarjeta = $json_recibido->tipotarjeta;
$pedido->numerotarjeta = $json_recibido->numerotarjeta;
$pedido->titulartarjeta = $json_recibido->titulartarjeta;
$pedido->fechacaducidad = $json_recibido->fechacaducidad;
$pedido->ccv = $json_recibido->ccv;

// Para tener un control de quien esta registrando el pedido:
//  vamos a guardar unos datos del cliente:
$pedido->ip = $_SERVER["REMOTE_ADDR"];
// user agent:
$pedido->navegador = $_SERVER["HTTP_USER_AGENT"];
// fecha y hora:
$pedido->fecha = date("Y-m-d H:i:s");

$id_pedido = R::store($pedido);


// vamos a registrar los productos del carriot
// en ina tabla que relacion el pedido relacionado
// con los productos que lo forman

foreach ($_SESSION["carrito"] as $pc) {
    $producto_pedido = R::dispense("productopedido");
    $producto_pedido->id_pedido = $id_pedido;
    $producto_pedido->id_producto = $pc[0];
    /**
     * de cada elemento en "carrito" tenemos un array,
     * la primera posicion del mismo es la id de producto 
     */
    $producto_pedido->cantidad = $pc[1];
    R::store($producto_pedido);
}
//vaciar carrito:
$_SESSION["carrito"] = array();

echo json_encode("ok");
