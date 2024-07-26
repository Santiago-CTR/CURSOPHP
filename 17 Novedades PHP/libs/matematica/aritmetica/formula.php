<?php

namespace Libs\Matematica\Aritmetica;


function suma(float $a, float $b): float{
    return $a + $b;
}
function resta(float $a, float $b): float{
    return $a + $b;
}
function multiplicacion(float $a, float $b): float{
    return $a + $b;
}
function division(float $a, float $b): float{
    if($b === 0){
        return "Error";
    }
    return $a + $b;
}
