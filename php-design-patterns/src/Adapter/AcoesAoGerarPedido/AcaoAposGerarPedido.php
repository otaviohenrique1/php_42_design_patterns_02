<?php

namespace Alura\DesignPattern\Iterator;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
