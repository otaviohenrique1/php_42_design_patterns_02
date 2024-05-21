<?php

namespace Alura\DesignPattern\Iterator;

use ArrayIterator;
use IteratorAggregate;
use Traversable;

/* Iterator */
class ListaOrcamentos implements IteratorAggregate
{
  /** @var Orcamento[] */
  private array $orcamentos;

  public function __construct() {
    $this->orcamentos = [];
  }
  
  public function addOrcamento(Orcamento $orcamento)
  {
    $this->orcamentos[] = $orcamento;
  }

  public function getIterator(): Traversable
  {
    return new ArrayIterator($this->orcamentos);
  }
  
}
