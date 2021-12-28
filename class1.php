<?php

class Class1
{
    private $nome;
    private $idade;

    public function __construct($nome,$idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function GetNome(){
        return $this->nome;
    }

    public function GetIdade(){
        return $this->idade;
    }
}
?>