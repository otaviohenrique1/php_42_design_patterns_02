<?php

namespace Alura\DesignPattern\Composite;

use DateTimeInterface;

class Pedido
{
  public string $nomeCliente;
  public DateTimeInterface $dataFinalizacao;
  public Orcamento $orcamento;
}