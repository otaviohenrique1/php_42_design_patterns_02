<?php

namespace Alura\DesignPattern\Proxy;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
