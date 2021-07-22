<?php

use Alura\Banco\Model\Conta\Conta;

class ContaCorrente extends Conta
{
  protected function percentualTarifa(): float
  {
    return .05;
  }

  public function transfere(float $valorATransferir, Conta $contaDestino): void
  {
    if ($valorATransferir > $this->saldo) {
      echo "Saldo indisponível";
      return;
    }

    $this->sacar($valorATransferir);
    $contaDestino->depositar($valorATransferir);
  }
}
