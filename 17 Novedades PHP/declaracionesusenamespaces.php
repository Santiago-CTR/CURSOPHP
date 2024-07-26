<?php
declare(strict_types=1);

require_once 'libs/matematica/aritmetica';
require_once 'libs/matematica/financiera';


use function Libs\Matematica\Aritmetica\{division, suma,resta};//desde php7+
// en el caso de usar funciones es necesario especificar con la palabra reservada function


// otras formas de hacer lo mismo

// use function Libs\Matematica\Aritmetica\suma;
// use function Libs\Matematica\Aritmetica\resta;
// use function Libs\Matematica\Aritmetica\suma, Libs\Matematica\Aritmetica\resta;


echo division(1,2);