<?php

namespace Alura\DesignPattern\Facade\EstadosOrcamento;

use Alura\DesignPattern\Facade\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}