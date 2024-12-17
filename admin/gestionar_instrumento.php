<?php
require "../librerias_php/setUp.php";

// Lo siguiente comprueba si ha llegado un parametro llamado accion y si
// este parametro vale eliminar
if (isset($_GET["accion"]) && $_GET["accion"] == "eliminar") {
    // echo "Se quiere eliminar un registro, antes de volver a mostra el listado";
    $id_eliminar = $_GET["id"];

    R::exec("delete from instrumentos where id=$id_eliminar");
    // lo siguiente borra el archivo indicado:
    // lo primero, comprobamos que el archivo exista
    $archivo = '../imagenes/instrumentos/$id_eliminar.jpg';

    if (file_exists($archivo)) {
        echo "El archivo existe";
        unlink("../imagenes/instrumentos/$id_eliminar.jpg");
    }
}
$instrumentos = R::getAll("SELECT 
    i.id, 
    i.nombre_instrumento, 
    i.precio, 
    i.estado, 
    i.gamma, 
    i.descripcion, 
    i.tipo,
    i.ventas,
    m.nombre_marca as marca, 
    c.nombre_categoria as categoria
    FROM 
        instrumentos AS i
    JOIN 
        marcas AS m ON i.marca_id = m.id
    JOIN 
        categorias AS c ON i.categoria_id = c.id
    ORDER BY 
        i.id DESC");

require("listado_instrumentos.php");
