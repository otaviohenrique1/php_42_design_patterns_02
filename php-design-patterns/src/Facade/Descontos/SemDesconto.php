<?php

namespace Alura\DesignPattern\Facade\Descontos;

use Alura\DesignPattern\Facade\Orcamento;

class SemDesconto extends Desconto
{
  public function __construct() {
    parent::__construct(null);
  }

  public function calculaDesconto(Orcamento $orcamento): float
  {
    return 0;
  }
}
