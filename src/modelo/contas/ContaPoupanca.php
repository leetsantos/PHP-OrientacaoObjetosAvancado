<?php

namespace Leetsantos\Banco\modelo\contas;

class ContaPoupanca extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.03;
    }
}