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
    $archivo = '../imagenes/$id_eliminar.jpg';

    if (file_exists($archivo)) {
        echo "El archivo existe";
        unlink("../imagenes/$id_eliminar.jpg");
    } 
}
$instrumentos = R::getAll("SELECT * FROM instrumentos");

require("listado_instrumentos.php");
