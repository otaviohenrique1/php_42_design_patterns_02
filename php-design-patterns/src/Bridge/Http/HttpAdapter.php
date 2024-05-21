<?php

namespace Alura\DesignPattern\Bridge\Http;

interface HttpAdapter
{
  public function post(string $url, array $data = []): void;
}
