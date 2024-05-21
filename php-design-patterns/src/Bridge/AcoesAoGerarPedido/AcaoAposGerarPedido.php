<?php

namespace Alura\DesignPattern\Bridge;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
