<?php

#Ejercicio N1

// function countNumberImpar(...$numbers){
//     $nimpares = 0;
//     foreach($numbers as $number){
//         if($number % 2 !== 0){
//             $nimpares++;
//         }
//     };
//     return $nimpares;
// }

// echo countNumberImpar(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17);

function countnumbervocals(){
    $vocales = ['a', 'e', 'i', 'o', 'u'];
    $resultado = [];
    $oracion = "Hoy es un dia excelente para programar, me siento listo para poner en practica mis conocimientos en PHP 7";

    for($i = 0; $i < strlen($oracion); $i++){
        if(in_array($oracion[$i], $vocales)){
            $resultado[$oracion[$i]][] = $i;
        }
    }
    return($resultado);
};

// var_dump(countnumbervocals());

// EjercicionN3


