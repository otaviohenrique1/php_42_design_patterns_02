<?php

namespace Alura\DesignPattern\Flyweight;

class LogDesconto
{
  public function informar(float $descontoCalculado): void
  {
    echo "Salvando log de desconto: $descontoCalculado";
  }
}
