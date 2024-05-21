<?php

namespace Alura\DesignPattern\Adapter;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
