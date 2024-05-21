<?php

namespace Alura\DesignPattern\Decorator;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
