<?php

use Alura\Banco\Model\Conta\Titular;
use Alura\Banco\Model\CPF;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\Funcionario\Desenvolvedor;
use Alura\Banco\Model\Funcionario\Diretor;
use Alura\Banco\Model\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();
$diretor = new Diretor(
  'Pedro Bones',
  new CPF('776.443.314-98'),
  8000
);

$gerente = new Gerente(
  'Erick Bones',
  new CPF('345.543.344-54'),
  1799
);

$novoTitular = new Titular('Tieda ', new CPF('113.331.313-43'), new Endereco('QNM', 'Conjunto', '54', 'Taguatinga'));

$autenticador->tentarLogin($diretor, '1345');
$autenticador->tentarLogin($gerente, '5431');
$autenticador->tentarLogin($novoTitular, 'qaz');

