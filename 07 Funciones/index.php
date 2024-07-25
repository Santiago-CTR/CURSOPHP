<?php
//  Funciones

function doSomething(){
    return 'Hola Mundo';
}

// echo doSomething();

// Funciones con parametros

function sayHelloTo($name){
    return "Hola $name";
}

// echo sayHelloTo("Santiago");


// Funciones con parametros inicializados

function howAreYou($name = 'User'){
    return ("Como estas $name");
}
// Cuando no se le da el parametro toma el que esta inicializado en la funcion
echo howAreYou('Santiago');


// Funciones con parametros de referencia

$x = 1;
function increment(&$variable){
    $variable++;
    //lo que hace es que busca la variable que se le envia y cambia su valor globalmente

}

// for($i = 0; $i < 5; $i++){
//     increment($x);
// }
// echo "$x"; 

// Funcion con parametros de longitud de variable PHP 5.6+

function addToShoppingCart(...$items){
    foreach($items as $item){
        echo "$item, ";
    };
};

// addToShoppingCart("Televisor 40\"", "PC Gamer", "Monitor Gamer");
// toma todos los valores que se le den como parametros como un array de n parametros


//FUNCIONES RECURSIVAS

function findPairYear($year){
    if($year % 2 == 0){
        echo "$year:PAR<br>";
    }

    if($year != date('Y')){
        findPairYear($year + 1);
    }
}

findPairYear(1000);

