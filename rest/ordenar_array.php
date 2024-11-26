<?php
$ids = array(10, 5, 50);
$cantidades = array(1000, 500, 5000);
// ordenar un array segun el otro
array_multisort($cantidades, $ids);

echo "cantidades<br>";
print_r($cantidades);
echo "ids:;<br>";
print_r($ids);
