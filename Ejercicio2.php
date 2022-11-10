<?php

/* Hacer un módulo que cargue un vector con N valores enteros al azar pertenecientes 
al intervalo [100,999] que no estén repetidos, validados por el módulo.*/

function validar($array,$item){
    $longitud = count($array);
    for($i=0; $i<$longitud; $i++){
        if ($array[$i]==$item){
            return false;
        }
    }
    return true;
}

$n = readline("Ingrese la cant de elementos del arreglo: ").PHP_EOL;

$i=0;
while ($i<$n){
    $item = rand(0,9);
    if (validar($array,$item)){
        $array[$i]= $item;
        $i++;    
    }
}
/*
for ($i=0; $i<$n; $i++){
    for ($j=0; $j<$n; $j++)
        $fila[$j]= rand(0,9);    carga una matriz
    $arrayM[$i] = $fila;
    }
*/
print_r($array);

?>