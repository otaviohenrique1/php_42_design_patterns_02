<?php

namespace Alura\DesignPattern\Proxy\EstadosOrcamento;

use Alura\DesignPattern\Proxy\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
  public function calculaDescontoExtra(Orcamento $orcamento): float
  {
    throw new DomainException('Um orcamento finalizado não pode receber desconto');
  }
}