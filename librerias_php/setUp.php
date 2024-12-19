<?php

require "rb-mysql.php";

// R::setup("mysql:host=localhost;dbname=bd_manaments_angular","root","");


$nombre_bd = "if0_37714247_manaments";
$usuario_bd = "if0_37714247";
$pass = "Macarrones12";
$url_bd = "sql307.infinityfree.com";
R::setup("mysql:host=$url_bd;dbname=$nombre_bd",$usuario_bd,$pass);