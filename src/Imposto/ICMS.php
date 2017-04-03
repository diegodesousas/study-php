<?php

namespace Study\Imposto;


class ICMS implements IImposto
{
    private $ipi;

    /**
     * ICMS constructor.
     * @param IPI $ipi
     */
    public function __construct(IPI $ipi = null)
    {
        $this->ipi = $ipi;
    }

    public function calcula(float $valor): float
    {
        $ipi = empty($this->ipi) ? 0 : $this->ipi->calcula($valor);

        return $valor  * 0.03 + $ipi;
    }
}