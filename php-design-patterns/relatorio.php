<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Bridge\Orcamento;
use Alura\DesignPattern\Bridge\Pedido;
use Alura\DesignPattern\Bridge\Relatorio\OrcamentoExportado;
use Alura\DesignPattern\Bridge\Relatorio\PedidoExportado;
use Alura\DesignPattern\Bridge\Relatorio\ArquivoXmlExportado;
use Alura\DesignPattern\Bridge\Relatorio\ArquivoZipExportado;

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoExportadoXml = new ArquivoXmlExportado('orcamento');
$orcamentoExportadoZip = new ArquivoZipExportado('orcamento.array');

$pedido = new Pedido();
$pedido->nomeCliente = 'Vinicios Dias';
$pedido->dataFinalizacao = new DateTimeImmutable();

$pedidoExportado = new PedidoExportado($pedido);
$pedidoExportadoXml = new ArquivoXmlExportado('pedido');
$pedidoExportadoZip = new ArquivoZipExportado('pedido.array');

echo $orcamentoExportadoXml->salvar($orcamentoExportado) . PHP_EOL;
echo $orcamentoExportadoZip->salvar($orcamentoExportado) . PHP_EOL;
echo $pedidoExportadoXml->salvar($pedidoExportado) . PHP_EOL;
echo $pedidoExportadoZip->salvar($pedidoExportado) . PHP_EOL;
