<?php

namespace Alura\DesignPattern\Bridge\Relatorio;

use Alura\DesignPattern\Bridge\Orcamento;
use ZipArchive;

class ArquivoZipExportado implements ArquivoExportado
{
  private string $nomeArquivoInterno;

  public function __construct(string $nomeArquivoInterno) {
    $this->nomeArquivoInterno = $nomeArquivoInterno;
  }

  public function salvar(ConteudoExportado $conteudoExportado): string
  {
    $caminhoArquivo = tmpfile();
    $zip = new ZipArchive();
    $zip->open($caminhoArquivo, ZipArchive::CREATE);
    $zip->addFromString($this->nomeArquivoInterno, serialize($conteudoExportado->conteudo()));
    $zip->close();
    return $caminhoArquivo;
  }
}
