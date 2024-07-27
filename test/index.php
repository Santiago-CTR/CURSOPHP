<?php

header("Content-Type: text/html; charset=UTF-8");

$VG = [
    "Primaria" => [
        "Primer Grado" => "Daniel Peña",
        "Sengundo Grado" => "Deivis Silva",
        "Tercer Grado" => "Juan Gomez",
        "Cuarto Grado" => "Ivan Jimenez",
        "Quinto Grado" => "Santiago Castillo" 
    ],
    "Secundaria" => [
        "Primer Grado" => "José Tapia",
        "Segundo Grado" => "Cesar Castañeda",
        "Tercer grado" => "Alonzo Perez",
        "Cuarto Grado" => "Louis Hamilton",
        "Quinto Grado" => "Daniel Ivan"
    ]
];

foreach($VG as $k => $V){
    echo "<b>$k</b><br>";
    foreach($V as $grade => $teacher){
        echo "$grade : <i>$teacher</i><br>";
    }
}


echo count($VG["Primaria"]);