<?php

namespace Libs\Matematica;

class Financiera{
    public function __construct(float $capital, float $tasa, int $periodo){
        //constructor es un metodo interno de una calse que se ejecuta automaticamete al instanciarla
        $this->capital = $capital;
        $this->tasa = $tasa;
        $this->periodo = $periodo;
        
        var_dump($this);//imprime solamente las propiedades de la clase
    }
    private float $capital;
    private float $tasa;
    private int $periodo;    


    public function tea(): float{
        return ($this->capital*((1+ $this->tasa)**$this->periodo));
    }

    public function sum(int $a, int $b): int{
        return $a + $b;
    }

    function __destruct()//se ejecuta automaticamente cuando termina la ejecucion de el ultimo acceso a la clase
    {
        $this->capital = 0;
        $this->tasa = 0;
        $this->periodo = 0;

        echo "Hola";
    }
}