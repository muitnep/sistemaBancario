<?php

namespace Alura\Banco;

use Alura\Banco\Model\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
  'Saint Paul',
  '31c',
  'Maryland',
  'Street One'

);

$doisEndereco = new Endereco(
  'Saint Peter',
  '43r',
  'Josephland',
  'Street Two'

);

echo $umEndereco->__toString() . PHP_EOL;
echo $doisEndereco->__toString();
