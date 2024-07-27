<?php

require_once 'libs/matematica/Aritmetica.php';
require_once 'libs/matematica/Financiera.php';

use Libs\Matematica\{Aritmetica, Financiera};
/*
    Cuando ambos archivos tienen el mismo namespace,
    como en este caso con Libs\Matematica, 
    se puede referenciar las clases definidas en 
    esos archivos utilizando el namespace común. 
*/

$obj = new Aritmetica;// instanciando la clase aritmetica
var_dump (Aritmetica::esImpar(1));//de esta forma accedemos a propiedades/metodos estaticos de una clase
// instanciar se define como crear un objeto a base de una clase.

// al hacer esto $obj debe de acceder todas las propiedades y métodos de la clase Aritmetca


// $obj = new Financiera(10000, 0.25, 2);
// var_dump($obj->tea());
// var_dump($obj->tea());
// var_dump($obj->sum(1,2));





