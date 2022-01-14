<?php

namespace Leetsantos\Banco\modelo;

interface Autenticavel
{
    public function podeAutenticar (string $senha) :bool;
}