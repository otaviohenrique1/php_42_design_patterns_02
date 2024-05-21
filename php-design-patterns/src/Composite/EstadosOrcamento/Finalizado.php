<?php

namespace Alura\DesignPattern\Composite\EstadosOrcamento;

use Alura\DesignPattern\Composite\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}