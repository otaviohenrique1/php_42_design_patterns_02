<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Composite\ItemOrcamento;
use Alura\DesignPattern\Composite\Orcamento;

$orcamento = new Orcamento();
$item1 = new ItemOrcamento();
$item1->valor = 300;
$item2 = new ItemOrcamento();
$item2->valor = 500;

$orcamento->addItem($item1);
$orcamento->addItem($item2);

$orcamentoAntigo = new Orcamento();
$item3 = new ItemOrcamento();
$item3->valor = 150;
$orcamentoAntigo->addItem($item3);

$orcamentoMaisAntigoAinda = new Orcamento();
$item4 = new ItemOrcamento();
$item4->valor = 50;
$item5 = new ItemOrcamento();
$item5->valor = 100;
$orcamentoMaisAntigoAinda->addItem($item4);
$orcamentoMaisAntigoAinda->addItem($item5);

$orcamento->addItem($orcamentoAntigo);
$orcamentoAntigo->addItem($orcamentoMaisAntigoAinda);

echo $orcamento->valor();