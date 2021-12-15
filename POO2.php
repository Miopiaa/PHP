<?php

    include('POOexemploclass.php');
    // instancia de objeto
    $exemplo = new Exemplo();
    $exemplo->setVar1('Guilherme');
    echo $exemplo->pegaVar1();
    //$exemplo->var2 = 'Guilherme';
    //varios objetos com atributos diferentes
    $exemplo2 = new Exemplo;
    $exemplo2->setVar1('joao');
    echo $exemplo2->pegaVar1();
    //$exemplo2->var2 = 'joao';
/*
    echo $exemplo->var2;
    echo '<br>';
    echo $exemplo2->var2;
*/
// estatico é um bagulho só
    //Exemplo::$var3 = 'Outra variavel';
    //echo Exemplo::$var3;

    //Exemplo::metodoStatico();
?>