<?php

namespace Alura\DesignPattern\Proxy;

class LogDesconto
{
  public function informar(float $descontoCalculado): void
  {
    echo "Salvando log de desconto: $descontoCalculado";
  }
}
