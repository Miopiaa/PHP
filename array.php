<?php
	// Array single
	$arr = ['guilherme', 'joao'];
	$arr = array('guiherme2', 'joao2');

	$arr[0] = 'guilherme';
	$arr[] = 'joao';

	//Array Multidimensionais
	//$arr2 = array(array('guilherme', 'joao'), array(23, 45));

	//$arr2[0] = array('chave1'=>'guilherme', 'joao');

	$arr2[0]['chave1'] = 'guilherme';

	echo $arr2[0]['chave1'];
?>
