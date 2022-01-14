<?php

namespace Leetsantos\Banco\service;


use Leetsantos\Banco\modelo\Autenticavel;

class Autenticador
{
    public function tentaLogin(Autenticavel $autenticavel,string $senha) :void
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Ok. Usuário logado no sistema" . PHP_EOL;
            return;
        }
        echo "Ops. Senha incorreta" . PHP_EOL;
    }
}
