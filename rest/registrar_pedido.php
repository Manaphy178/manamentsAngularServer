<?php
session_start();
require_once "../librerias_php/setUp.php";

$json_recibido = json_decode(file_get_contents("php://input"));

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
