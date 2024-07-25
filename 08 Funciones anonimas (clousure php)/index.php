<?php

//closure

// $suma = function($a, $b){
//     return $a + $b;
// };

// echo $suma(1,2);

// callback es una funcion que se manda como parametro a otra


$a = function($a, $b, $c){
    return $c($a + $b);
};


print_r($a(1,2, function($r){
    echo "$r";
}));