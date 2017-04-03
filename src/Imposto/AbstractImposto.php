<?php


namespace Study\Imposto;


class AbstractImposto
{
    public function handleCalcula($imposto, float $valor)
    {
        return empty($imposto) ? 0 : $imposto->calcula($valor);
    }
}