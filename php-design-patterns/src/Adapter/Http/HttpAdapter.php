<?php

namespace Alura\DesignPattern\Adapter\Http;

interface HttpAdapter
{
  public function post(string $url, array $data = []): void;
}
