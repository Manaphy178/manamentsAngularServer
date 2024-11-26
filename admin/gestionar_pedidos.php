<?php
require "../librerias_php/setUp.php";

// vamos a pedir los pedidos con toda la informacion que tengan
$sql = "SELECT 
p.id,p.nombre,p.direccion,p.tarjeta,
pp.cantidad,
i.nombre_instrumento,i.precio,i.descripcion
FROM pedidos AS p, productopedido AS pp, instrumentos AS i
WHERE p.id = pp.id_pedido AND pp.id_producto = i.id 
ORDER BY p.id DESC;";

$pedidos = R::getAll($sql);

require("gestionar_pedidos_listado.php");
