<?php

namespace Alura\DesignPattern\Flyweight;

use Alura\DesignPattern\Flyweight\EstadosOrcamento\EmAprovacao;
use Alura\DesignPattern\Flyweight\EstadosOrcamento\EstadoOrcamento;

class Orcamento implements Orcavel
{
  // public int $quantidadeItens;
  // public float $valor;

  private array $itens;
  public EstadoOrcamento $estadoAtual;

  public function __construct() {
    $this->estadoAtual = new EmAprovacao();
    $this->itens = [];
  }

  public function aplicaDescontoExtra()
  {
    // $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
  }

  public function aprova()
  {
    $this->estadoAtual->aprova($this);
  }

  public function reprova()
  {
    $this->estadoAtual->reprova($this);
  }

  public function finaliza()
  {
    $this->estadoAtual->finaliza($this);
  }

  public function addItem(Orcavel $item)
  {
    $this->itens[] = $item;
  }

  public function valor(): float
  {
    return array_reduce(
      $this->itens,
      fn(float $valorAcumulado, Orcavel $item) => $item->valor() + $valorAcumulado,
      0
    );
  }
}
