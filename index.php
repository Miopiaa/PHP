<?php
ini_set('display_errors', 1);

    require ('vendor/autoload.php');

    use FlyingLuscas\Correios\Client;
    use FlyingLuscas\Correios\Service;
   // require 'vendor/autoload.php';
    $correios = new Client;

    /*print_r($correios->zipcode()
    ->find('81670-250'));
    */

    print_r($correios->freight()->origin('88080-230')
    ->destination('87047-230')
    ->services(Service::SEDEX, Service::PAC)
    ->item(16, 16, 16, .3, 1) // largura, altura, comprimento, peso e quantidade
    ->calculate());
?>