<?php


namespace Study\Imposto;


class ISS extends AbstractImposto implements IImposto
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
        return $valor  * 0.02 + $this->handleCalcula($this->imposto, $valor);
    }
}