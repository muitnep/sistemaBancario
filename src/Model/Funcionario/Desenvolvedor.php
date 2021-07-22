<?php

namespace Alura\Banco\Model\Funcionario;

class Desenvolvedor extends Funcionario
{
  public function sobeDeNivel()
  {
    return $this->recebeAumento($this->recuperaSalario() * .75);
  }

  public function calculaBonificacao(): float
  {
    return 500.0;
  }
}
