<?php

namespace Study\Imposto;

class Calculador
{
    /**
     * @var float
     */
    protected $valor;

    /**
     * Calculador constructor.
     *
     * @param $valor
     */
    public function __construct(float $valor)
    {
        $this->valor = $valor;
    }

    /**
     * Calcula o imposto sobre o valor
     *
     * @param IImposto $imposto
     * @return float
     */
    public function valorDe(IImposto $imposto) :float
    {
        return $imposto->calcula($this->valor);
    }
}