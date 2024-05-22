<?php

namespace Alura\DesignPattern\Flyweight\AcoesAoGerarPedido;

use SplObserver;
use SplSubject;

class CriarPedidoNoBanco implements SplObserver
{
  public function update(SplSubject $pedido): void
  {
    echo "Salvando pedido no banco de dados" . PHP_EOL;
  }
}
