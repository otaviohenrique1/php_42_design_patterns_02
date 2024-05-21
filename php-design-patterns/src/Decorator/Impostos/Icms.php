<?php

namespace Alura\DesignPattern\Decorator\Impostos;

use Alura\DesignPattern\Decorator\Orcamento;

class Icms extends Imposto
{
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.1;
  }
}
