<?php

	$conteudo =  'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc imperdiet consequat hendrerit. Morbi convallis, urna quis imperdiet laoreet, est odio iaculis tortor, vel rhoncus sapien lorem in risus. Aenean urna libero, pretium vel finibus at, pretium a erat. Phasellus massa velit, gravida sit amet commodo et, tincidunt nec magna. Proin leo nulla, sagittis ut laoreet quis, fringilla vel tortor. Curabitur sed ornare lectus. Nunc ut nibh efficitur, pellentesque eros eu, suscipit diam. Nunc id volutpat augue. Sed blandit mattis convallis.';
	//serve para recortar uma string
	//echo substr($conteudo,0,20);

	$nome = 'GUilherme cherem grilllo';

	$nomes = explode(' ',$nome);


	//print_r($nomes);

	//serve para juntar um array com um delimitador.
	// No caso o espaço
	$nomes = implode(' ',$nomes);

	//echo $nomes;

	//Strip_tags serve para retirar todo codigo html
	$conteudo = '<h1>Guilherme<h1/>Outra coisa';

	//echo strip_tags($conteudo);

	//htmlentities mostra O CODIGO HTML NA PÁGINA
	echo htmlentities('<div><div/>');




?>
