<form method="post">
    <input type="text" name="adress" />
    <input type="submit" name="acao" value="Enviar" />
</form>

<?php
    //POR ALGUMA REZAO A API RECUSA ACESSO!!!!!!
    if(isset($_POST['acao'])){
    $url = urlencode($_POST['adress']);
    $str = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=false&key=AppKey(AIzaSyANjztPEDsedIgFN_iMDKC6UFPoCC2HYn8)');

    //https://maps.googleapis.com/maps/api/distancematrix/json?origins=dehli&destinations=pune&mode=bicycling&language=en-EN&sensor=true&key=AppKey(paste App Key)

    

    $endereco = json_decode($str);
    print_r($endereco);
    echo $endereco->results[0]->address_components[0]->short_name;


    }
?>
