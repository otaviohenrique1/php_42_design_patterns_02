<?php

namespace Alura\DesignPattern\Bridge;

use DateTimeInterface;

class Pedido
{
  public string $nomeCliente;
  public DateTimeInterface $dataFinalizacao;
  public Orcamento $orcamento;
}