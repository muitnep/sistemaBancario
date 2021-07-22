<?php

namespace Alura\Banco\Model;

abstract class Pessoa
{

  private string $nome;
  private CPF $cpf;

  public function __constructor(string $nome, CPF $cpf)
  {
    $this->validaNomeTitular($nome);
    $this->nome = $nome;
    $this->cpf = $cpf;
  }

  protected function validaNomeTitular(string $nomeTitular)
  {
    if (strlen($nomeTitular) < 5) {
      echo "Nome precisa ter pelo menos 5 caracteres";
      exit();
    }
  }

  public function recuperaNome()
  {
    return $this->nome;
  }

  public function recuperaCpf(): string
  {
    return $this->cpf->recuperaNumero();
  }
}
