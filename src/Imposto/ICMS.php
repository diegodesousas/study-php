<?php

namespace Study\Imposto;

class ICMS extends AbstractImposto
{
    protected function novoCalcula(float $valor) : float
    {
        return $valor  * 0.03;
    }
}