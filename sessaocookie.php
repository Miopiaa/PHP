<?php
   
    // sessão valido até o usuario fechar o navegador
    session_start();
    //$_SESSION['nome'] = 'Rafa';
    //cookie fica guardado e expira so quando o tempo que quem programou expira
    setcookie('nome', 'rafa', time() - (60*60*24), '/');

    echo $_COOKIE['nome'];
?>