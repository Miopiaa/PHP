<?php

	$nome = 'Rafael';
	//switch é a variavel que voce quer ler
	/*switch($nome){
		//Caso seja esse valor leia assim
		case 'Rafael':
			echo 'Minha variavel e guilherme';
			break;
		// caso seja esse outro valor  leia assim
		case 'Joao':
			echo 'Minha variavel e joao';
			break;
	}
	*/

	//Break serve para o loop: for, while,  do  e foreach e switch
	// continue para loop: for, while, do e foreach
	for ($i = 0; $i < 10; $i++){
		/*
		if ($i == 5 || $i == 9)
			continue;
			*/
		echo $i;
		echo '<hr>';
		/*
		if ($i == 5)
		break;
		*/
	}


?>
