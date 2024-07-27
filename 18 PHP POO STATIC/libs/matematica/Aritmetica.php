<?php

namespace Libs\Matematica;

class Aritmetica{

    public $propiedad = "";
    // en las clases tenemos que especificar el modificador de acceso
    // provisionalmente tendremos publicos y privados
    // privados -> propiedad/metodo que es accesible solo dentro de la clase
    // publicos -> propiedad/metodo que es accesible fuera de la calse

    public static function suma(float $a, float $b): float{
        return $a + $b;
    }

    public static function resta(float $a, float $b): float{
        return $a - $b;
    }

    public static function multiplicacion(float $a, float $b): float{
        return $a * $b;
    }

    public static function division(float $a, float $b): float{
        if($b === 0){
            return "Error";
        }
        return $a / $b;
    }
    //la palabra reservada static permite ejecutar metodos de una clase sin instanciarlos
    public static function esPar(int $number){
        return self::calcularEsParOImpar($number);//palabra reservada para acceder a entes de la clase sin instanciar
        
        // return Aritmetica::calcularEsParOImpar($number);
        // en esta caso ↑ tambien se puede usar solo que self puede ser mas entendible
        
        // con $this podemos hacer referencia a la misma clase en si y asi acceder a alguna propiedad/método
        // THIS SOLO FUNCIONA CUANDO LA CLASE HA SIDO INSTANCIADA 
    }
    
    public static function esImpar($number){
        return Aritmetica::calcularEsParOImpar($number, false);
    }

    private static function calcularEsParOImpar(int $number, bool $par = true){
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