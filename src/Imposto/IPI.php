<?php

namespace Study\Imposto;

class IPI extends AbstractImposto
{
    protected function novoCalcula(float $valor) : float
    {
        return $valor * 0.05;
    }
}