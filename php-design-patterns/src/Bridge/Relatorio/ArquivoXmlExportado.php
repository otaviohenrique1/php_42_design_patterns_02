<?php

namespace Alura\DesignPattern\Bridge\Relatorio;

use SimpleXMLElement;

class ArquivoXmlExportado implements ArquivoExportado
{
  private string $nomeElementoPai;

  public function __construct(string $nomeElementoPai) {
    $this->nomeElementoPai = $nomeElementoPai;
  }
  
  public function salvar(ConteudoExportado $conteudoExportado): string
  {
    $elementoXml = new SimpleXMLElement("<{$this->nomeElementoPai}/>");
    foreach ($conteudoExportado->conteudo() as $item => $valor) {
      $elementoXml->addChild($item, $valor);
    }
    $caminhoArquivo = tmpfile();
    $elementoXml->asXML($caminhoArquivo);

    return $caminhoArquivo;
  }
}
