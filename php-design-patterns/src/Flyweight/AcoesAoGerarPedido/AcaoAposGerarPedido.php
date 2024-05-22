<?php

namespace Alura\DesignPattern\Flyweight;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
