<?php
session_start();

$json_recibido = json_decode(file_get_contents('php://input'));
if (!isset($json_recibido->id)) {
    echo json_encode("datos incorrectos");
    die();
}

$instrumentoId = $json_recibido->id;

if (!isset($_SESSION["carrito"])) {
    echo json_encode(["error" => "El carrito está vacío"]);
    die();
}

for ($i = 0; $i < count($_SESSION["carrito"]); $i++) {
    if ($_SESSION["carrito"][$i][0] == $instrumentoId) {
        unset($_SESSION["carrito"][$i]);
        break;
    }
}

$_SESSION["carrito"] = array_values($_SESSION["carrito"]);
if (count($_SESSION["carrito"]) == 0) {
    echo json_encode("vacio");
} else {
    echo json_encode("ok");
}
