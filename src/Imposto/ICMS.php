<?php

namespace Study\Imposto;

class ICMS implements IImposto
{
    public function calcula(float $valor): float
    {
        return $valor  * 0.03;
    }
}