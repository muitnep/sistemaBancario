<?php

use Alura\Banco\Model\Conta\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Model\{Endereco, CPF};


require_once 'autoload.php';

$contaNova = new ContaPoupanca(
  new Titular(
    'Daniela Bones',
    new CPF('654.764.431-69'),
    new Endereco('QNM 56', 'M Lândia', 'Taguatinga', '89')
  )
);

$contaNova->deposita(1300);
$contaNova->saca(100);

echo "Saldo disponível R$ " . $contaNova->recuperaSaldo();
