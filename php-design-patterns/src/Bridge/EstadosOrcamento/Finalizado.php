<?php

namespace Alura\DesignPattern\Adapter\EstadosOrcamento;

use Alura\DesignPattern\Adapter\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}