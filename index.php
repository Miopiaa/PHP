<!--
<form method="post">
    <input type="text" name="adress" />
    <input type="submit" name="acao" value="Enviar" />
</form>
-->

<?php
    //aula CURL
    $endereco = urlencode('coqueiros');
    $curl = curl_init();

    curl_setopt($curl, CURLOPT_URL,"http://maps.googleapis.com/maps/api/geocode/json?address=$endereco");
    //curl_setopt($curl, CURLOPT_POST, 1);
    //curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query(array()));

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec($curl);

    curl_close($curl);

    echo $server_output;
    //requisicao com CURL no server local
    /*
    $resultado = json_decode($server_output);

    echo $resultado->titulo[0];
    echo '<br>';
    echo $resultado->conteudo[0];
    /*
    //POR ALGUMA REZAO A API RECUSA ACESSO!!!!!!
    if(isset($_POST['acao'])){
    //Requsição para o google utilizando file get contents
    $url = urlencode($_POST['adress']);
    $str = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=false&key=AppKey(AIzaSyANjztPEDsedIgFN_iMDKC6UFPoCC2HYn8)');

    //https://maps.googleapis.com/maps/api/distancematrix/json?origins=dehli&destinations=pune&mode=bicycling&language=en-EN&sensor=true&key=AppKey(paste App Key)

    $endereco = json_decode($str);
    print_r($endereco);
    echo $endereco->results[0]->address_components[0]->short_name;
    }
    */
?>
