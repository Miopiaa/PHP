<?php
    include ('exemplo.php');

    // isso tudo nao funciona pois e tudo privada;
    $exemplo = new Exemplo;
    //$exemplo->var1 = 'pedro';
    //echo Exemplo->var1;


    // Já esse funciona pois é publico;
    $exemplo2 = new Exemplo;
    //$exemplo2->var2 = 'Rafael';
    //echo $exemplo2->var2;


    //Exemplo::$var3 = 'Outro nome';
    //echo Exemplo::$var3;

    $exemplo->Setvar1('RAFAEL');
    echo $exemplo->Pegavar1();

    $exemplo2->Setvar1('FELIPE');
    echo $exemplo2->Pegavar1();
?>