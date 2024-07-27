<?php


require_once 'tienda/ProductoBase.php';
require_once 'tienda/productos/Guitarra.php';
require_once 'tienda/productos/Bajo.php';
require_once 'tienda/productos/Bateria.php';


use Tienda\Productos\{Guitarra, Bajo, Bateria};

$obj = new Guitarra(2);;
var_dump($obj->calcularMonto());