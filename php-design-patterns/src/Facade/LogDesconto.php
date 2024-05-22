<?php

namespace Alura\DesignPattern\Facade;

class LogDesconto
{
  public function informar(float $descontoCalculado): void
  {
    echo "Salvando log de desconto: $descontoCalculado";
  }
}
