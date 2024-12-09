<?php

$nombres = ["Juan", "Ana", "Carlos"];
$jsonData = json_encode($nombres, JSON_PRETTY_PRINT);
file_put_contents('datos.json', $jsonData);

$jsonData = file_get_contents('datos.json');
$nombres = json_decode($jsonData, true);

print_r($nombres);
?>