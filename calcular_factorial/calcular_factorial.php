<?php
function factorial($numero){
    if($numero <= 1) return 1;
    return $numero * factorial($numero - 1);
}
echo "el factorial de 5 es: " . factorial(5);
?>