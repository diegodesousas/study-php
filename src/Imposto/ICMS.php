<?php


namespace Study\Imposto;


class ICMS implements IImposto
{

    public function calcula(float $valor): float
    {
        return ($valor / 100) * 3;
    }
}