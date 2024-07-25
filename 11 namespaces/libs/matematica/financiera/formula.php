<?php

namespace Libs\Matematica\Financiera;

function tea ($capital, $tasa, $periodo) {
    return number_format($capital * ((1 + $tasa)**$periodo), 2);
}