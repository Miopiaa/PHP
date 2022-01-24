<?php
    if(isset($_POST['id_membro'])){
    $pdo = new PDO('mysql:host=localhost;dbname=bootstrap_projeto','root','198866');
    $sql = $pdo->prepare("DELETE FROM `tb_equipe` WHERE id = ?");
    $sql->execute(array($_POST['id_membro']));
    }
?>