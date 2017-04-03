<?php

namespace Study\Imposto;

class SemImposto implements IImposto
{
    public function calcula(float $valor) : float
    {
        return 0;
    }
}