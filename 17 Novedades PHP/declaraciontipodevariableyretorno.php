<?php

declare(strict_types=1);//activa el uso estricto de php
//es decir que si se le especifica un tipo de dato que puede almacenar una variable y no se le proporciona de ese tipo da un error
            //todos los valores que se ingresan deben ser enteros
function sum(int ...$numeros): int{//de esta forma podemos definir el tipo de dato que debe retornar la funcion
    return array_sum($numeros);
}

function tea(float $capital, float $tasa, int $periodo): float {
    return (
        $capital * ((1 + $tasa)**$periodo)
    );
}

// echo sum(1,2,3,4);

var_dump(number_format(tea(1587.25, 0.15, 2), 2));//formatea el numero pero en string
var_dump(round((tea(1587.25, 0.15, 2)), 2));//formatea el numero pero lo deja en su tipo inicial


