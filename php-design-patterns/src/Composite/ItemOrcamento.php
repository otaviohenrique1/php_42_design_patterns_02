<?php

namespace Alura\DesignPattern\Composite;

class ItemOrcamento implements Orcavel
{
  public float $valor;

  public function valor(): float
  {
    return $this->valor;
  }
}
