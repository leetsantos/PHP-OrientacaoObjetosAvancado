<?php

namespace Leetsantos\Banco\modelo;
final class Cpf
{
    private string $cpf;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }
}