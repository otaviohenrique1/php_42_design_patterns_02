<?php

namespace Alura\DesignPattern\Decorator\EstadosOrcamento;

use Alura\DesignPattern\Decorator\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}