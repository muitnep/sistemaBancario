<?php

require_once 'autoload.php';

use Alura\Banco\Model\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Funcionario, Gerente};
use Alura\Banco\Model\CPF;
use Alura\Banco\Service\ControladorDeBonificacoes;

$umDev = new Desenvolvedor(
  'Jessé Loops',
  new CPF('778.998.665-09'),
  3500
);

$umaGerente = new Gerente(
  'Clarice Many',
  new CPF('134.431.113-43'),
  5500

);

$umDiretor = new Diretor(
  'Rodrigo Bones',
  new CPF('456.654.765-45'),
  10000

);

$umEditor = new EditorVideo(
  'Daniela Bones',
  new CPF('998.778.654-11'),
  1999
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacao($umDev);
$controlador->adicionaBonificacao($umaGerente);
$controlador->adicionaBonificacao($umDiretor);
$controlador->adicionaBonificacao($umEditor);

echo $controlador->recuperaTotal();
