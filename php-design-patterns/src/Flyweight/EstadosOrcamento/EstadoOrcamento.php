<?php

namespace Alura\DesignPattern\Flyweight\EstadosOrcamento;

use Alura\DesignPattern\Flyweight\Orcamento;
use DomainException;

abstract class EstadoOrcamento
{
  /**
   * @throws DomainException
   */
  abstract public function calculaDescontoExtra(Orcamento $orcamento): float;

  public function aprova(Orcamento $orcamento)
  {
    throw new DomainException('Este orcamento não pode ser aprovado');
  }

  public function reprova(Orcamento $orcamento)
  {
    throw new DomainException('Este orcamento não pode ser reprovado');
  }

  public function finaliza(Orcamento $orcamento)
  {
    throw new DomainException('Este orcamento não pode ser finalizado');
  }
}