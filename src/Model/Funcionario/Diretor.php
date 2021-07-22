<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\Autorizado;

class Diretor extends Funcionario implements Autorizado
{

  public function calculaBonificacao(): float
  {
    return $this->recuperaSalario() *  2;
  }

  public function podeAutenticar(string $senha): bool
  {
    return $senha === '1345';
  }
}
