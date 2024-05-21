<?php

namespace Alura\DesignPattern\Bridge\Http;

use Alura\DesignPattern\Bridge\Http\HttpAdapter;

class ReactPHPHttpAdapter implements HttpAdapter
{
  public function post(string $url, array $data = []): void {
    echo "ReactPHP";
  }
}
