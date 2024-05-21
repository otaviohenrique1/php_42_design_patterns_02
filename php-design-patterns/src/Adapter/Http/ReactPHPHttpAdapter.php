<?php

namespace Alura\DesignPattern\Adapter\Http;

use Alura\DesignPattern\Adapter\Http\HttpAdapter;

class ReactPHPHttpAdapter implements HttpAdapter
{
  public function post(string $url, array $data = []): void {
    echo "ReactPHP";
  }
}
