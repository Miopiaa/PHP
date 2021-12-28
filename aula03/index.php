<?php
ini_set('display_errors', 1);
$pdo = new PDO('mysql:host=localhost;dbname=modulo_8', 'root', '198866');

$id = 2;

// OR funciona como `ou`
//AND funciona como `e`

$sql = $pdo->prepare("UPDATE `clientes` SET nome='Lucas', sobrenome='de Jesus' WHERE id=$id");

if($sql->execute()){
    echo 'Meu cliente foi atualizado com sucesso!';
}

?>