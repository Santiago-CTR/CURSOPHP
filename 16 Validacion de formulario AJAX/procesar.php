<?php

header('Content-type: application/json; charset=UTF-8');

$validaciones = [];

function is_date($value){
    $value = explode('/', $value);
    if(count($value) !== 3) return false;
    return checkdate($value[1], $value[0], $value[2]);
}

if(!empty($_POST)){

    if(empty($_POST['name'])){
        $validaciones['name'] = 'El nombre es requerido';
    }elseif(strlen($_POST['name']) < 3){
        $validaciones['name'] = 'Debe ser un nombre válido';
    }
    if(empty($_POST['datebirt'])){
        $validaciones['datebirt'] = 'la fecha de nacimiento es requerida';
    }
    if(empty($_POST['email'])){
        $validaciones['email'] = 'El email es requerido';
    }elseif(!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
        $validaciones['email'] = 'Debe ser un email válido';
    }
    
    echo json_encode([
        'response' => count($validaciones) === 0,
        'errors' => $validaciones
    ]);
}