<?php

// OPERADOR NULL

$usuario_id = $_GET['id'] ?? 1;
var_dump($usuario_id);

// forma tradicional o anterior
$usuario_id = !empty($_GET['id']) ? $_GET['id'] : 1;
// este tambien se podria reconocer como condicoinal ternario
// si se cumple la condicion !empty($_GET['id']) se coloca el primer valor, si no, el segundo, en este caso el 1;

// var_dump($usuario_id);


// OPERADOR DE NAVE ESPACIAL

$i = 1;
// <=> es el operador
// si es menor, devuelve -1
// si es igual, devuelve 0
// si es mayor, devuelve 1
switch($i <=> 5){
    case -1:
        echo "Es menor";
        break;
    case 0: 
        echo "Es igual";
        break;
    case 1:
        echo "Es mayor";
    break;
}