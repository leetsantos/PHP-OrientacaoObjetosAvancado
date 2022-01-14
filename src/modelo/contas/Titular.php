<?php

namespace Leetsantos\Banco\modelo\contas;

use Leetsantos\Banco\modelo\Autenticavel;
use Leetsantos\Banco\modelo\Pessoa;
use Leetsantos\Banco\modelo\Cpf;
use Leetsantos\Banco\modelo\Endereco;
class  Titular extends Pessoa implements Autenticavel
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    public function getEndereco(): Endereco
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
       return $senha === 'abcd';
    }
}