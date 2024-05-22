<?php

namespace Alura\DesignPattern\Flyweight\AcoesAoGerarPedido;

use SplObserver;
use SplSubject;

class LogGerarPedido implements SplObserver
{
  public function update(SplSubject $pedido): void
  {
    echo "Envia e-mail de pedido gerado" . PHP_EOL;
  }
}
