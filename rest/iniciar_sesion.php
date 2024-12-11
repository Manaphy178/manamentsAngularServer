<?php
session_start();
require_once "../librerias_php/setUp.php";

$json_recibido = json_decode(file_get_contents("php://input"));
if (!isset($json_recibido->username) || !isset($json_recibido->password)) {
    die("Error");
}
if (! preg_match("/[a-z0-9áéíóúñ]{3,20}$/i", $json_recibido->password)) {
    die("password no aceptado desde el servidor");
}
if (! preg_match("/[a-z0-9áéíóúñ]{3,15}$/i", $json_recibido->username)) {
    die("username no aceptado desde el servidor");
}

$usuario = R::findOne("usuarios", "username = ?", [$json_recibido->username]);
if ($usuario == null) {
    die("Error de usuario");
}
if ($json_recibido->password == $usuario->password) {
    $_SESSION["usuario"] = $usuario;
    // $carrito_id = $_SESSION["carrito"];
    // $carrito_id_serializado = serialize($carrito_id);

    // $_SESSION["usuario"]["carrito_id"] = $carrito_id;
    echo json_encode("ok");
} else {
    echo json_encode("Error en algo");
}
