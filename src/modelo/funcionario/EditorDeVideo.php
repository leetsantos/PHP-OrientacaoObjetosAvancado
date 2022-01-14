<?php

namespace Leetsantos\Banco\modelo\funcionario;

class EditorDeVideo extends Funcionario
{
    public function calculaBonificacao(): float
    {
        return 600;
    }
}