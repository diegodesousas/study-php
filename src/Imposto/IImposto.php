<?php

namespace Study\Imposto;

interface IImposto
{
    public function __construct(IImposto $imposto);

    public function calcula(float $valor) : float;
}