<?php
// session

// session_start();

// $_SESSION['frutas'] = ['piña', 'Manzana', 'Mora'];
// se utiliza para hacer referencia a que se va a trabajar con sesiones


//cookie

// es guardada en el lado del cliente y siempre es mandada en las interacciones con el servidor por cabeceras

// es visible y no es serializada 
// no se usa en datos sensibles

date_default_timezone_set('America/Bogota');

// la cookie se almacena del lado del cliente

setcookie("frutas", // key 
          serialize(["piña", "fresa", "coco"]), //value
          time()+60 //tiempo actual + 60 segundos para morir la cookie
        );