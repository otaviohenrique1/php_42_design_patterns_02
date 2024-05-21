<?php

namespace Alura\DesignPattern\Decorator\Impostos;

use Alura\DesignPattern\Decorator\Orcamento;

class Iss extends Imposto
{
  public function realizaCalculoEspecifico(Orcamento $orcamento): float
  {
    return $orcamento->valor * 0.06;
  }
}
