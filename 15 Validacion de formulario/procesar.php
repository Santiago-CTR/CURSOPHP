<?php
$validaciones = [];

header('Content-type: application/json; charset=UFT-8');

function is_date($value){
    $value = explode("/", $value);
    if(count($value) !== 3) return false;
    return checkdate($value[1], $value[0], $value[2]);
}

if(!empty($_POST)){
    if(empty($_POST['name'])){
        $validaciones['name'] = 'Name is required';
    }elseif(strlen($_POST['name']) < 3){
        $validaciones['name'] = 'A valid name is required';
    }

    if(empty($_POST['email'])){
        $validaciones['email'] = 'Email is required';
    }elseif(!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
        $validaciones['email'] = 'A valid email is required';
    }

    if(empty($_POST['birth'])){
        $validaciones['birth'] = 'date of birth is required';
    }elseif(!is_date($_POST['birth'])){
        $validaciones['birth'] = 'A valid date of birth is required';
    }

    echo json_encode($validaciones);

    // json encode es encodificar o convertir a formato json un arreglo(array) generalmente
}

