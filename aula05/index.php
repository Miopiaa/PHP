<?php
ini_set('display_errors', 1);
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8','root','198866');

$sql = $pdo->prepare("SELECT * FROM posts");

$sql->execute();

$info = $sql->fetchAll();
/*
foreach ($info as $Key => $value){
    echo 'Titulo '.$value['titulo'];
    echo '<br>';
    echo 'Noticia: '.$value['conteudo'];
    echo '<hr>';
}

for ($i = 0;$i < count($info);$i++){
    echo 'Titulo '.$info[$i]['titulo'];
    echo '<br>';
    echo 'Noticia: '.$info[$i]['conteudo'];
    echo '<hr>';
}
*/

?>