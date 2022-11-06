<?php
  
/*Cargar un vector con N números reales y, a pedido del usuario: mostrar los números 
que superan al promedio y su posición, verificar si los elementos del vector se hallan 
ordenados en forma descendente, muestre el mínimo con su posición. */

use function PHPSTORM_META\registerArgumentsSet;

function promedio($array){
    $suma = 0;
    $cont = 0;
    foreach($array as $item){
        $suma += (float)$item;
        $cont++;
    }
    return $suma/$cont;
}

function ordenado($array, $orden){  // verifica $orden ascendente 1 , descendente 0
    $longitud = count($array);
    if ($orden == 1){
        for($i=1; $i<$longitud; $i++){
            if (($array[$i-1]) > ($array[$i]))
                return false;
        }
    }else if ($orden == 0){
        for($i=1; $i<$longitud; $i++){
            if (($array[$i-1]) < ($array[$i]))
                return false;
        }
    }
    return true;
}

function mostrarSupPromedio($array, $prom){
    foreach($array as $item){
        if ($item > $prom)
            echo $item ;
    }
    PHP_EOL;
}

function mostrarMenPromedio($array, $prom){
    foreach($array as $item){
        if ($item < $prom)
            echo $item ;
    }
    PHP_EOL;
}

function minimo($array){}

$n = readline("Ingrese la cant de elementos del arreglo: ").PHP_EOL;

for ($i=0; $i<$n; $i++){
    $array[$i]= readline("Ingrese un numero real: ").PHP_EOL;
}

print_r($array);
$prom = promedio($array);
echo "El promedio del array es: " . $prom .PHP_EOL;
echo var_dump(ordenado($array,0));
echo "Los Valores que superan el promedio son: ".PHP_EOL;
mostrarSupPromedio($array,$prom);
echo "Los Valores que no superan el promedio son: ".PHP_EOL;
mostrarMenPromedio($array,$prom);

?>