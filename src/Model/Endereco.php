<?php

namespace Alura\Banco\Model;

class Endereco
{

  private string $cidade;
  private string $rua;
  private string $bairro;
  private string $numero;

  public function __construct(string $rua, string $numero, string $bairro, string $cidade)
  {
    $this->cidade = $cidade;
    $this->rua = $rua;
    $this->bairro = $bairro;
    $this->numero = $numero;
  }

  public function recuperaCidade(): string
  {
    return $this->cidade;
  }


  public function recuperaRua(): string
  {
    return $this->rua;
  }

  public function recuperaBairro(): string
  {
    return $this->bairro;
  }

  public function recuperaNumero(): string
  {
    return $this->numero;
  }

  public function __toString(): string
  {
    return "Rua: {$this->rua}, Número: {$this->numero}, Bairro: {$this->bairro}, Cidade:{$this->cidade}";
  }
}
