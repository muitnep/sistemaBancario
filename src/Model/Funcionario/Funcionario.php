<?php

namespace Alura\Banco\Model\Funcionario;

use Alura\Banco\Model\{Pessoa, CPF};

abstract class Funcionario extends Pessoa
{
  protected float $salario;

  public function __construct(string $nome, CPF $cpf, float $salario)
  {
    parent::__constructor($nome, $cpf);
    $this->salario = $salario;
  }

  public function alternaNome(string $nome): void
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
  }

  public function recuperaSalario(): float
  {
    return $this->salario;
  }

  public function recebeAumento(float $valorAumento): void
  {
    if ($valorAumento < 0) {
      echo 'Aumento deve ser positivo';
      return;
    }
    $this->salario += $valorAumento;
  }

  abstract function calculaBonificacao(): float;
}
