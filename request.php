<?php
    if(isset($_POST['request']) && $_POST['request'] == 'name_return'){
        //die(json_encode(array('resultado'=>array('outro_objeto'=>'Guilherme'))));
        //seleciona as noticias;
        $noticias = array('titulo'=>array('noticia 1', 'notica 2'), 'conteudo'=>array('conteudo da notica 1','conteudo da notica 2'));
        die(json_encode($noticias));
    }

?>