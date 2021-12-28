<?php
ini_set('display_errors', 1);
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '198866');

$id = 5;

// OR funciona como `ou`
//AND funciona como `e`

$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

if($sql->execute(array($id))){
    echo 'Meu cliente foi Deletado com sucesso!!';
}

?>