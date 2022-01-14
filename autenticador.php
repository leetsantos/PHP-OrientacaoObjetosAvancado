<?php

require_once 'autoload.php';

use Leetsantos\Banco\modelo\contas\Titular;
use Leetsantos\Banco\modelo\Cpf;
use Leetsantos\Banco\modelo\Endereco;
use Leetsantos\Banco\modelo\funcionario\Diretor;
use Leetsantos\Banco\modelo\funcionario\Gerente;
use Leetsantos\Banco\service\Autenticador;



$autenticador= new Autenticador();
$diretor= new Diretor('João da Silva', new Cpf('025.646.588-96'), 10000);
$titular = new Titular(new Cpf('256.985.654-85'), 'Mariana', new Endereco('Pelotas', 'centro', 'qualquer', '22'));
$gerente= new Gerente('Maria', new Cpf('025.645.698-96'), 600);
$autenticador->tentaLogin($titular, 'abcd');