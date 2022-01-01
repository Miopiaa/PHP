<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="teste">
<?php
    ini_set('display_errors', 1);
    class binario{
        public function muda(){
            $n1 = $_POST['n1'];
            $bin = decbin($n1);
            echo 'Número Decimal: ';
            echo $n1;
            echo '<br>';
            echo 'Número Binário: ';
            echo $bin;
            //echo $bin;
        }
    }

$teste=new binario();
$teste->muda();
?>
</div>
</body>
</html>


