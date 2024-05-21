<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Adapter\Http\ReactPHPHttpAdapter;
use Alura\DesignPattern\Adapter\Orcamento;
use Alura\DesignPattern\Adapter\RegistroOrcamento;

$registroOrcamento = new RegistroOrcamento(new ReactPHPHttpAdapter());
$registroOrcamento->registrar(new Orcamento());
