<?php

use Leetsantos\Banco\modelo\Endereco;

require_once 'autoload.php';

$umEndereco= new Endereco('Pelotas', 'centro', 'xv', '631');
$outroEndereco = new Endereco('Porto Alegre', 'Esperenca', 'vinte','89');

echo $umEndereco;
$umEndereco->cidade= 'Maranhão';
$umEndereco->rua='Liberdade';
$umEndereco->numero= '256';
$umEndereco->Bairro= 'Senhor do Bom Fim';
echo $umEndereco;