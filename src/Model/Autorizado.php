<?php

namespace Alura\Banco\Model;

interface Autorizado
{
  public function podeAutenticar(string $senha): bool;
}
