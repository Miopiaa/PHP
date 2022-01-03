<?php
    //cria pasta/diretorio - mkdir('');
    //deleta pasta/diretorio - rmdir('');
    //Ler arquivo XML

    //$json = '{"a":"rafael","b":{"0":"Felipe","1":"Joao"},"c":3,"d":4,"e":5}';

    //var_dump(json_decode($json, true));
    /*decodifica jason
    $obj = json_decode($json);
    $arr = json_decode($json, true);

    //echo $obj->a;
    //echo $arr['a'];
    echo $arr['b']['1'];
    
    $arr = ['nome'=>'Guilherme','cidade'=>'floripa'];
    $json = json_encode($arr);
    echo $json;
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script  type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $.ajax({
                url:'request.php',
                dataType:'json'
            }).done(function(data){
                console.log(data.cidade);
            })
        })
    </script>
</body>
</html>