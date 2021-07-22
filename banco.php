<?php

require_once 'autoload.php';

use Alura\Banco\Model\{Endereco, CPF};
use Alura\Banco\Model\Conta\{Conta, Titular};


$endereco = new Endereco('Vicent Xicara', 'Rua', 'Saint Joshep', '9');
$rodrigo = new Titular('Rodrigo Bones', new CPF('123.456.789-10'),  $endereco);
$primeiraConta = new Conta($rodrigo);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // isso é ok

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$livia = new Titular('Lívia Coats', new CPF('698.549.548-10'), $endereco);
$segundaConta = new Conta($livia);
var_dump($segundaConta);

$outroEndereço = new Endereco('Fortnite', 'Alameda Arborizada', 'Bosque', '131');
$outra = new Conta(new Titular('Jonesi', new CPF('123.654.789-01'),  $outroEndereço));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
