<?php

namespace Alura\Banco\Model\Conta;

use Alura\Banco\Model\Autorizado;
use Alura\Banco\Model\Pessoa;
use Alura\Banco\Model\Endereco;
use Alura\Banco\Model\CPF;


class Titular extends  Pessoa implements Autorizado
{
    protected Endereco $endereco;

    public function __construct(string $nome, CPF $cpf,  Endereco $endereco)
    {
        parent::__constructor($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'qaz';
    }
}
