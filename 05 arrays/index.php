<?php

header('Content-Type: text/html; charset=UTF-8');

$frutas = ['Papaya', 'Uva', 'Manzana']; //array bidimencional




$colegio = [ //array multidimencional
    'Primaria' => [
        'Primer Grado' => 'John Daniel',
        'Segundo Grado' => 'Santiago Andrés',
        'Tercer Grado' => 'Deivis Silvañ',
        'Cuarto Grado' => 'John Mario',
        'Quinto Grado' => 'Daniel Peña',
    ],
    'Secundaria' => [
        'Primer Grado' => 'Jose Tapia',
        'Segundo Grado' => 'Silfrido Alvarez',
        'Tercer Grado' => 'Alonso Perez',
        'Cuarto Grado' => 'Keyla Torregroza',
        'Quinto Grado' => 'Danna Castillo',
    ]
];

foreach($colegio as $nivel => $Grados){
    echo "<b>$nivel</b><br>";
    foreach($Grados as $grado => $profesor){
        echo "- <b>$grado</b> : <i>$profesor</i><br>";
    }
}

// var_dump($colegio);