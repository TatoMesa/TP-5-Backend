<?php

/* Mediante un menú de opciones realizar el siguiente programa modular: 
a) Cargar un vector hasta que el operador no quiera ingresar más datos, validar que 
se ingresen números enteros impares. 
b) Mostrar  un mensaje que muestre si los datos del vector están repetidos o no. 
c) Contar y mostrar cuántos valores K hay en el vector. 
d) Calcular y mostrar el promedio de los datos del vector. 
e) Mostrar a opción del operador: la posición de los datos y los datos que superan 
el promedio o aquellos que no lo hacen*/

function impar($item){
    if ($item % 2 == 1)
        return true;
    else
        return false;
}


function cargarVector(){
    $i =0;
    do{
        $item = readline("Ingrese un dato impar para cargar, 0 (cero) para finalizar la carga: ");
        if (impar($item)){
            $vector[$i] = $item;
            $i++;
        }
        else
            echo "El dato a ingresar debe ser impar" . PHP_EOL ;        
    }while ($item != 0);
    return $vector;
} 


$vector = cargarVector();
print_r($vector);


?>