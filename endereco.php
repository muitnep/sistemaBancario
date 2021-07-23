<?php

namespace Alura\Banco;

use Alura\Banco\Model\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco(
  'saint paul',
  '31c',
  'maryland',
  'street one'

);

$doisEndereco = new Endereco(
  'saint peter',
  '43r',
  'josephland',
  'street two'

);

echo $umEndereco->cidade;
exit();
