<?php

require "../librerias_php/setUp.php";

$instrumentos = R::getAll("SELECT * FROM instrumentos ORDER BY id DESC");

echo json_encode($instrumentos);