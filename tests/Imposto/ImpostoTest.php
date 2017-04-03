<?php

use PHPUnit\Framework\TestCase;
use Study\Imposto\Calculador;
use Study\Imposto\ICMS;
use Study\Imposto\IPI;
use Study\Imposto\ISS;

class ImpostoTest extends TestCase
{
    public function testDeveCalcularIPI()
    {
        $calculador = new Calculador(50.0);

        // Deve calcular o valor do imposto IPI
        // O valor do IPI é de 5% sobre o valor da venda
        $valorDoIPI = $calculador->valorDe(new IPI());

        $this->assertEquals(2.5, $valorDoIPI);
    }

    public function testDeveCalcularICMS()
    {
        $calculador = new Calculador(50.0);

        // Deve calcular o valor do imposto ICMS
        // O valor do ICMS é de 3% sobre o valor da venda
        $valorDoICMS = $calculador->valorDe(new ICMS());

        $this->assertEquals(1.5, $valorDoICMS);
    }

    public function testDeveCalcularICMSComIPI()
    {
        $calculador = new Calculador(50.0);

        // Deve calcular o valor do imposto ICMS + IPI
        // O valor do ICMS é de 3% sobre o valor da venda
        // O valor do IPI é de 5% sobre o valor da venda
        $valorDoICMS = $calculador->valorDe(new ICMS(new IPI()));

        $this->assertEquals(4.0, $valorDoICMS);
    }

    public function testDeveCalcularIPIComISS()
    {
        $calculador = new Calculador(50.0);

        // Deve calcular o valor do IPI + ISS
        // O valor do IPI é de 5% sobre o valor da venda
        // O valor do ISS é variável de acordo com o serviço (nesse caso de 2%)
        $valorDoIPI = $calculador->valorDe(new IPI(new ISS()));

        $this->assertEquals(3.5, $valorDoIPI);

    }
}