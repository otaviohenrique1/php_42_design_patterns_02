<?php

namespace Alura\DesignPattern\Bridge\Relatorio;

interface ArquivoExportado
{
  public function salvar(ConteudoExportado $conteudoExportado): string;
}
