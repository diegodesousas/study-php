<?php

namespace Study\Imposto;

class IPI implements IImposto
{
    public function calcula(float $valor): float
    {
        return $valor * 0.05;
    }
}