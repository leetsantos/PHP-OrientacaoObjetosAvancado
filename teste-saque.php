<?php

use Leetsantos\Banco\modelo\contas\{Conta, ContaCorrente, ContaPoupanca, Titular};
use Leetsantos\Banco\modelo\{Cpf, Endereco};

require_once 'autoload.php';

$conta =new ContaCorrente(new Titular(new Cpf('123.549.985-25'), 'Letícia Santos', new Endereco( 'Pelotas', 'Centro', 'Uma Rua', '631')));
$conta->depositar(500);
$conta->sacar(100);
echo $conta->getSaldo(). PHP_EOL;