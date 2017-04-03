<?php


namespace Study\Imposto;


class ISS implements IImposto
{
    private $imposto;

    /**
     * ISS constructor.
     * @param IImposto $imposto
     */
    public function __construct(IImposto $imposto = null)
    {
        $this->imposto = $imposto;
    }

    /**
     * @param float $valor
     * @return float
     */
    public function calcula(float $valor): float
    {
        $imposto = empty($this->imposto) ? 0 : $this->imposto->calcula($valor);

        return $valor  * 0.02 + $imposto;
    }
}