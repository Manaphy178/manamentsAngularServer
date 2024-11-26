<?php

require "../librerias_php/setUp.php";

$id = $_GET['id'];

$instrumento = R::getRow("SELECT * FROM instrumentos as i WHERE i.id = ? LIMIT 1", [$id]);

echo json_encode($instrumento);
