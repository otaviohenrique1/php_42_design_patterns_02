<?php

namespace Alura\DesignPattern\Flyweight;

use DateTimeInterface;

class Pedido
{
  public string $nomeCliente;
  public DateTimeInterface $dataFinalizacao;
  public Orcamento $orcamento;
}