<?php
require_once 'autoload.php';
use Leetsantos\Banco\modelo\Cpf;

use Leetsantos\Banco\modelo\funcionario\Desenvolvedor;
use Leetsantos\Banco\modelo\funcionario\Diretor;
use Leetsantos\Banco\modelo\funcionario\EditorDeVideo;
use Leetsantos\Banco\modelo\funcionario\Funcionario;
use Leetsantos\Banco\modelo\funcionario\Gerente;
use Leetsantos\Banco\service\ControladorDeBonificacao;

$funcionario= new Gerente('Letícia Santos', new Cpf('125.657.698-98'), 3000);
$dev= new Desenvolvedor('Vinicius Dias', new Cpf('555.657.698-98'), 1000);
$diretor= new Diretor('Valdislei', new Cpf('155.956.689-41'), 5000);
$dev->sobeDeNivel();
$editor= new EditorDeVideo('Paulo', new Cpf('156.548.854-98'), 1500 );
$controlador = new ControladorDeBonificacao( );
$controlador->adicionaBonificacao($funcionario);
$controlador->adicionaBonificacao($dev);
$controlador->adicionaBonificacao($diretor);
$controlador->adicionaBonificacao($editor);


echo $controlador->getTotalBonificacao() . PHP_EOL;