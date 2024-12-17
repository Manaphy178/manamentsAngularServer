<?php
session_start();
require_once "../librerias_php/setUp.php";

$json_recibido = json_decode(file_get_contents("php://input"));

// validacion:
if (
    !isset($json_recibido->nombre) ||
    !isset($json_recibido->direccion) ||
    !isset($json_recibido->email) ||
    !isset($json_recibido->password) ||
    !isset($json_recibido->username) ||
    !isset($json_recibido->postal)
) {
    die("Error: Missing required fields");
}
// expresiones regulares en php
// nombre
if (! preg_match("/[a-z áéíóúñ]{2,40}$/i", $json_recibido->nombre)) {
    die("nombre no aceptado desde el servidor");
}
// direccion
if (! preg_match("/[a-z áéíóúñ0-9,.:ªº]{2,30}$/i", $json_recibido->direccion)) {
    die("direccion no aceptado desde el servidor");
}
// email
if (! preg_match("/([a-z0-9_\\.-]+)@([0-9a-z\\.-]+)\\.([a-z\\.]+)$/", $json_recibido->email)) {
    die("email no aceptado desde el servidor");
}
// password
if (! preg_match("/[a-z0-9áéíóúñ]{3,20}$/i", $json_recibido->password)) {
    die("password no aceptado desde el servidor");
}
// username
if (! preg_match("/[a-z0-9áéíóúñ]{3,15}$/i", $json_recibido->username)) {
    die("username no aceptado desde el servidor");
}
// postal
if (! preg_match("/[0-9]{5}$/", $json_recibido->postal)) {
    die("postal no aceptado desde el servidor");
}
// comprobamos que no se repita el username en la base de datos
$usuario_bd = R::findOne("usuarios", "username = ?", [$json_recibido->username]);
if ($usuario_bd != null) {
    echo json_encode("Error: El username ya existe");
} else {
    $usuario = R::dispense("usuarios");
    $usuario->nombre = $json_recibido->nombre;
    $usuario->direccion = $json_recibido->direccion;
    $usuario->email = $json_recibido->email;
    $usuario->password = $json_recibido->password;
    $usuario->username = $json_recibido->username;
    $usuario->postal = $json_recibido->postal;
    // Para tener un control de quien esta registrando el pedido:
    //  vamos a guardar unos datos del cliente:
    $usuario->ip = $_SERVER["REMOTE_ADDR"];
    R::store($usuario);
    echo json_encode("ok");
}
