<?php

namespace Libs\Matematica\Financiera;


function tea(float $capital, float $tasa, int $periodo): float{
    return round($capital * ((1 + $tasa) ** $periodo), 2);
}