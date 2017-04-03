<?php

namespace Study\Imposto;


class ICMS extends AbstractImposto implements IImposto
{
    private $imposto;

    /**
     * ICMS constructor.
     * @param IImposto $imposto
     */
    public function __construct(IImposto $imposto = null)
    {
        $this->imposto = $imposto;
    }

    public function calcula(float $valor): float
    {
        return $valor  * 0.03 + $this->handleCalcula($this->imposto, $valor);
    }
}