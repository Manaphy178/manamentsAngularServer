<?php
require "../librerias_php/setUp.php";

$sql = "Select * from usuarios";
$usuarios = R::getAll($sql);

require("gestionar_usuarios_listado.php");
