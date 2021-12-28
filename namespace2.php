<?php
namespace sessao1;
use sessao2\Class2;

class Class1
{
    function __construct()
    {
        new Class2();
        echo 'Classe instanciada';
    }
}




?>