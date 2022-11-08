<?php

/* Hacer un módulo que cargue un vector con N valores enteros al azar pertenecientes 
al intervalo [100,999] que no estén repetidos, validados por el módulo.*/

$n = readline("Ingrese la cant de elementos del arreglo: ").PHP_EOL;

for ($i=0; $i<$n; $i++){
    $array[$i]= rand(100,999);
}

for ($i=0; $i<$n; $i++){
    for ($j=0; $j<$n; $j++)
        $fila[$j]= rand(100,999);
    $arrayM[$i] = $fila;
    }

print_r($arrayM);

?>