<?php

namespace Tienda\Productos;
use Tienda\ProductoBase;

class Bajo extends ProductoBase{
    public function __construct(int $cantidad = 1)
    {
        parent::__construct(
            1000,
            $cantidad,
            0.20
        );//parent permite ejecutar metodos de la superclase o de la clase que heredo la actual
        //en este caso ejecutamos el contructor ya que no se ha ejecutado sin instanciar la clase
    }

    public function showFinalPrice(){
        return $this->calcularMonto();
    }
}