<?php

namespace Study\Imposto;

interface IImposto
{
    public function calcula(float $valor) : float;
}