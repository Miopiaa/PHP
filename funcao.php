<?php
//função nativa
	function mostrarNome($nome, $idade){
		echo '<h2>Nome é: </h2>' .$nome;
		echo '<h2>Idade é: </h2>' .$idade;
	}

	function calculadora($numero1 = 10, $numero2 = 5){
		echo ($numero1 + $numero2);
	}

	function verdade(){
		return true;
	}

	function retornarString(){
		return 'guilherme';
	}

	echo retornarString();

	$var = verdade();

	//calculadora(20, 30);

?>

