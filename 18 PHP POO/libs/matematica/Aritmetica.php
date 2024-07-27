<?php

namespace Libs\Matematica;

class Aritmetica{

    public $propiedad = "";
    // en las clases tenemos que especificar el modificador de acceso
    // provisionalmente tendremos publicos y privados
    // privados -> propiedad/metodo que es accesible solo dentro de la clase
    // publicos -> propiedad/metodo que es accesible fuera de la calse

    public function suma(float $a, float $b): float{
        return $a + $b;
    }

    public function resta(float $a, float $b): float{
        return $a - $b;
    }

    public function multiplicacion(float $a, float $b): float{
        return $a * $b;
    }

    public function division(float $a, float $b): float{
        if($b === 0){
            return "Error";
        }
        return $a / $b;
    }

    public function esPar(int $number){
        return $this->calcularEsParOImpar($number);
        // con $this podemos hacer referencia a la misma clase en si y asi acceder a alguna propiedad/método
        // THIS FUNCIONA CUANDO LA CLASE HA SIDO INSTANCIADA
    }
    
    public function esImpar($number){
        return $this->calcularEsParOImpar($number, false);
    }

    private function calcularEsParOImpar(int $number, bool $par = true){
        return $par ? $number % 2 === 0 : $number % 2 !== 0;
        /*
        if($par){
            return $number % 2 === 0;
        }else{
            return $number % 2 !== 0;
        }
        */
    }
}