<?php

namespace Alura\DesignPattern\Flyweight\EstadosOrcamento;

use Alura\DesignPattern\Flyweight\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}