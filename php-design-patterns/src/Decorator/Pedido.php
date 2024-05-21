<?php

namespace Alura\DesignPattern\Decorator;

use DateTimeInterface;

class Pedido
{
  public string $nomeCliente;
  public DateTimeInterface $dataFinalizacao;
  public Orcamento $orcamento;
}