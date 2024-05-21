<?php
use Alura\DesignPattern\Decorator\CalculadoraDeImpostos;
use Alura\DesignPattern\Decorator\Impostos\Icms;
use Alura\DesignPattern\Decorator\Orcamento;

require_once 'vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms());
