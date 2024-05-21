<?php

namespace Alura\DesignPattern\Iterator\AcoesAoGerarPedido;

use SplObserver;
use SplSubject;

class EnviarPedidoPorEmail implements SplObserver
{
  public function update(SplSubject $pedido): void
  {
    echo $pedido->pedido->nomeCliente;
    echo "Gerando log de geração de pedido" . PHP_EOL;
  }
}
