<?php

    class Pessoa{
        //Objeto pessoa

        private $nome = 'rafael';
        private $idade = '21';
        private $peso = '70kg';

        // pode ser chamada
        public function crescer(){
            //quando trabalha dentro do objeto usa $this
            $this->comer();
            echo 'estou crescendo';
        }
        //private significa que fica disponivel paenas dentro da classe
        private function comer(){
            echo 'estou comendo';
        }
    }

    // instanciar
    $pessoa = new Pessoa;
    $pessoa2 = new Pessoa;
    
    $pessoa->crescer();

?>