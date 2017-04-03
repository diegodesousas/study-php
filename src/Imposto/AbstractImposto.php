<?php

namespace Study\Imposto;

abstract class AbstractImposto implements IImposto
{
    /**
     * @var IImposto
     */
    protected $proximoImposto;

    /**
     * AbstractImposto constructor.
     * @param IImposto $proximoImposto
     */
    public function __construct(IImposto $proximoImposto = null)
    {
        $this->proximoImposto = $proximoImposto ?? new SemImposto();
    }

    public function calcula(float $valor) : float
    {
        return $this->novoCalcula($valor) + $this->proximoImposto->calcula($valor);
    }

    protected abstract function novoCalcula(float $valor) : float;
}