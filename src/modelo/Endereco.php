<?php

namespace Leetsantos\Banco\modelo;
class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $rua;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }
    public function __toString() :string
    {
       return "$this->rua, $this->numero, $this->bairro, $this->cidade". PHP_EOL;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }
    public function __get(string $nomeAtributo)
    {
        $metodo= 'get'. ucfirst($nomeAtributo);
        return $this->$metodo();
    }
    public function __set(string $nomeAtributo, string $nome)
    {
        $metodo = 'set' .ucfirst($nomeAtributo);
        return $this->$metodo($nome);
    }
    private function setBairro (string $nome){
        $this->bairro=$nome;
    }
    private function setCidade (string $nome){
        $this->cidade=$nome;
    }
    private function setNumero (string $nome){
        $this->numero=$nome;
    }
    private function setRua(string $nome){
        $this->rua=$nome;
    }
}