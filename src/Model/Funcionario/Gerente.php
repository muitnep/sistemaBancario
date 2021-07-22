<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Autorizado;

class Gerente extends Funcionario implements Autorizado
{
  public function calculaBonificacao(): float
  {
    return $this->recuperaSalario();
  }

  public function podeAutenticar(string $senha): bool
  {
    return $senha === '5431';
  }
}
