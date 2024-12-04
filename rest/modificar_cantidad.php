<?php
session_start();

$json_recibido = json_decode(file_get_contents('php://input'));
if (!isset($json_recibido->id) || !isset($json_recibido->cantidad)) {
    echo json_encode("datos incorrectos");
    die();
}

$instrumentoId = $json_recibido->id;
$cantidad = $json_recibido->cantidad;

if (!isset($_SESSION["carrito"])) {
    echo json_encode(["error" => "El carrito está vacío"]);
    die();
}

$producto_encontrado = false;
$borrado = false;

for ($i = 0; $i < count($_SESSION["carrito"]); $i++) {
    if ($_SESSION["carrito"][$i][0] == $instrumentoId) {
        $producto_encontrado = true;

        // Asegurar que la cantidad no sea menor a 0
        $nueva_cantidad = $_SESSION["carrito"][$i][1] + $cantidad;

        if ($nueva_cantidad <= 0) {
            // Eliminar el producto si la cantidad es 0 o menor
            unset($_SESSION["carrito"][$i]);
            $borrado = true;
        } else {
            // Actualizar la cantidad si es válida
            $_SESSION["carrito"][$i][1] = $nueva_cantidad;
        }
        break;
    }
}

// Si el producto no se encontró, devolver error
if (!$producto_encontrado) {
    echo json_encode(["error" => "Producto no encontrado en el carrito"]);
    die("");
}

$_SESSION["carrito"] = array_values($_SESSION["carrito"]);

// Enviar respuesta de éxito
if (count($_SESSION["carrito"]) == 0) {
    echo json_encode("vacio");
} else if ($borrado) {
    echo json_encode("borrado");
} else {
    echo json_encode("ok");
}
