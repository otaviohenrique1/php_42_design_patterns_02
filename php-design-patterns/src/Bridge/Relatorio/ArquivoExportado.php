<?php

namespace Alura\DesignPattern\Bridge\Relatorio;

/* Bridge */
interface ArquivoExportado
{
  public function salvar(ConteudoExportado $conteudoExportado): string;
}
