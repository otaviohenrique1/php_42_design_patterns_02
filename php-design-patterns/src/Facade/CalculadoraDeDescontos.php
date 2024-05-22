<?php

namespace Alura\DesignPattern\Facade;

use Alura\DesignPattern\Facade\Descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\Facade\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\Facade\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
  public function calculaDescontos(Orcamento $orcamento): float
  {
    $cadeiaDeDescontos = new DescontoMaisDe5Itens(
      new DescontoMaisDe500Reais(
        new SemDesconto()
      )
    );

    $descontoCalculado =  $cadeiaDeDescontos->calculaDesconto($orcamento);
    $logDesconto = new LogDesconto();
    $logDesconto->informar($descontoCalculado);

    return $descontoCalculado;
  }
}
