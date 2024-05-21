<?php

namespace Alura\DesignPattern\Iterator\EstadosOrcamento;

use Alura\DesignPattern\Iterator\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}