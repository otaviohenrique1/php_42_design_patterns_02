<?php

namespace Alura\DesignPattern\Facade;

interface AcaoAposGerarPedido
{
  public function executaAcao(Pedido $pedido): void;
}
