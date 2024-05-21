<?php

namespace Alura\DesignPattern\Bridge\Relatorio;

use Alura\DesignPattern\Bridge\Pedido;

/* Bridge */
class PedidoExportado implements ConteudoExportado
{
  private Pedido $pedido;

  public function __construct(Pedido $pedido) {
    $this->pedido = $pedido;
  }

  public function conteudo(): array {
    return [
      "data_finalizacao" => $this->pedido->dataFinalizacao->format('d/m/Y'),
      "nome_cliente" => $this->pedido->nomeCliente
    ];
  }
}
