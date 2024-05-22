<?php

namespace Alura\DesignPattern\Proxy;

use DateTimeInterface;

class Pedido
{
  public string $nomeCliente;
  public DateTimeInterface $dataFinalizacao;
  public Orcamento $orcamento;
}