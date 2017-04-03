<?php

namespace Study\Imposto;

class IPI extends AbstractImposto implements IImposto
{
    private $imposto;

    /**
     * IPI constructor.
     * @param IImposto $imposto
     */
    public function __construct(IImposto $imposto = null)
    {
        $this->imposto = $imposto;
    }

    public function calcula(float $valor): float
    {
        return $valor * 0.05 + $this->handleCalcula($this->imposto, $valor);
    }
}