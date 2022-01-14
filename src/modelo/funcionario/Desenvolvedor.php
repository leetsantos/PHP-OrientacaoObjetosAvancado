<?php

namespace Leetsantos\Banco\modelo\funcionario;

class Desenvolvedor extends Funcionario
{
    public function sobeDeNivel()
    {
         $this->recebeAumento($this->getSalario() * 0.75);
    }
    public function calculaBonificacao(): float
    {
        return 500;
    }
}
