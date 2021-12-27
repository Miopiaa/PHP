<?php
    include('interface.php');

    class teste implements interface1{
        public function printOnScreen($par){
            echo $par;
        }
    }

    $teste = new teste;
    $teste->printOnScreen('Olá mundo');
?>