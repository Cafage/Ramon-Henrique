<?php
//->Eu não entendi exatamente o enunciado do exercicio, não sei se é 50% das
//->vezes que atualizo a página ou se é os 50% do número gerado randomicamente.

//->Nesse código abaixo ele tem cerca de 50% de chande de morder o dedo.
 function foiMordido () {
 	//numero aleatório
 	$num = rand(10,100);
	if ($num % 2 == 0) {
		return $retorno = true;
	}else{
		return $retorno = false;
	}
 	
 }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Exercicio 2</title>
	</head>
	<body>
		<?php 
			$funcRetorno =  foiMordido(); 
			if ($funcRetorno) {
		?>
			<p>Joãozinho mordeu o  seu dedo !</p>
		<?php
			}else{
		?>
			<p>Joaozinho NAO mordeu o seu dedo !</p>
		<?php		
			}
		?>	
	</body>
</html>
 