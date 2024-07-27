<?php

namespace Tienda;

class ProductoBase{

    /*  
        protected es un modificador de acceso que permite 
        que las clases derivadas hereden pueden ejecutar estos metodos,
        
        private no permite que las clases que hereden puedan ejecutar 
        los metoddos privados

    */
    protected $precio;
    protected $cantidad;
    protected $descuento;

    public function __construct(
        float $precio,
        int $cantidad,
        float $descuento
    )
    {
        $this->precio = $precio;
        $this->cantidad = $cantidad;
        $this->descuento = $descuento;
    }

    public function calcularMonto(){
        $descuento = 1 - $this->descuento;
        return ($this->cantidad * $this->precio)*$descuento;
    }
}