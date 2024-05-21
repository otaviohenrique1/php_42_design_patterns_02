<?php

namespace Alura\DesignPattern\Adapter;
use Alura\DesignPattern\Adapter\EstadosOrcamento\Finalizado;
use Alura\DesignPattern\Adapter\Http\HttpAdapter;
use DomainException;

class RegistroOrcamento
{
  private HttpAdapter $http;

  public function __construct(HttpAdapter $http) {
    $this->http = $http;
  }

  public function registrar(Orcamento $orcamento): void
  {
    if (!$orcamento->estadoAtual instanceof Finalizado) {
      throw new DomainException("Apenas orçamentos finalizados podem ser registrados na API");
      
    }

    $this->http->post('http://api.registrar.orcamento', [
      'valor' => $orcamento->valor,
      'quantidadeItens' => $orcamento->quantidadeItens
    ]);
  }
}
