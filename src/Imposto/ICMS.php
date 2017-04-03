<?php

namespace Study\Imposto;


class ICMS implements IImposto
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
        $imposto = empty($this->imposto) ? 0 : $this->imposto->calcula($valor);

        return $valor  * 0.03 + $imposto;
    }
}