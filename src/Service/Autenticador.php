<?php

namespace Alura\Banco\Service;

use Alura\Banco\Model\Autorizado;


class Autenticador
{
  public function tentarLogin(Autorizado $autorizado, string $senha): void
  {
    if ($autorizado->podeAutenticar($senha)) {
      echo 'Login efetuado com sucesso.';
    } else {
      echo 'Login e/ou Senha inválidos.';
    }
  }
}
