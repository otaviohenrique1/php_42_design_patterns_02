<?php

namespace Alura\DesignPattern\Composite;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
