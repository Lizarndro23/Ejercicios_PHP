<?php
function filtarPares($array){
    return array_filter($array, fn($numeros) => $numeros % 2 == 0);
}

$numeros = [1, 2, 3, 4, 5, 6];
$pares = filtarPares($numeros);
print_r($pares);
?>