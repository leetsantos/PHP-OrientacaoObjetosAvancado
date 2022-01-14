<?php
namespace Leetsantos\Banco\service;
use Leetsantos\Banco\modelo\funcionario\Funcionario;

class ControladorDeBonificacao
{
    private float $totalBonificacao=0;

    public function adicionaBonificacao( Funcionario $funcionario)
    {
        $this->totalBonificacao+=$funcionario->calculaBonificacao();
    }

    public function getTotalBonificacao() :float
    {
        return $this->totalBonificacao;
    }
}