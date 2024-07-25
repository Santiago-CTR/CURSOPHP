<?php
// operadores de array


$a = ['Banana', 'Papaya', 'Fresa'];
$b =  ['Uva', 'Ciruela', 'Piña'];

var_dump($a + $b);//los indices iguales son ignorados, se toma el valor de el array de la izquierda en este caso $a

//operadores array

$a = 1;
$b = 2;
$c = 3;
var_dump($a === 2 || $b !==2 || $c ===3);//operador (o) este si solo una sola condicion de las dadas se cumple devuelve true