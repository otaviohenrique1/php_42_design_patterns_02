<?php

namespace Alura\DesignPattern\Facade\Descontos;

use Alura\DesignPattern\Facade\Orcamento;

abstract class Desconto
{
  protected ?Desconto $proximoDesconto;

  public function __construct(?Desconto $proximoDesconto)
  {
    $this->proximoDesconto = $proximoDesconto;
  }

  abstract public function calculaDesconto(Orcamento $orcamento): float;
}
