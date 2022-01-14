<?php

namespace Leetsantos\Banco\modelo\funcionario;

use Leetsantos\Banco\modelo\Cpf;
use Leetsantos\Banco\modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf,float $salario)
    {
        parent:: __construct($nome, $cpf);
        $this->salario = $salario;
    }
    public function getSalario(): float
    {
        return $this->salario;
    }
    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }
    abstract public function calculaBonificacao() : float;
    public function recebeAumento(float $valorAumento)
    {
        if ($valorAumento<0){
            echo "Aumento deve ser positivo";
            return;
        }
        $this->salario+= $valorAumento;
    }

}