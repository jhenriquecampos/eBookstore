<?php

	/*
		Esse arquivo tem como objetivo listar os atributos de um livro passado como json à partir de consulta no banco de dados.
	*/


	$arquivo = file_get_contents("livro.json"); //carregar arquivo .json
	$livro = json_decode($arquivo); //decodificar e transformar arquivo json em um objeto

?>

<!DOCTYPE html>
<html>
<head>
	<title><?=$livro->titulo?></title>
	<style type="text/css">
		.dados_livro {
			width: 300px;
			padding: 20px 25px 20px 25px;
			margin: 20px 10px 10px 10px;
			border: 1px solid black; /*borda sólida preta*/
			font-family: 'Montserrat', sans-serif; /*definir uma fonte qualquer*/
			box-sizing: border-box; /*alinha o texto ao box*/
		}

		.descricao_livro {
			width: 600px;
			padding: 5px 25px;
			margin: 0px 10px;
			border: 1px solid black; /*borda sólida preta*/
			text-align: justify; /*justificar o texto*/
			font-family: 'Montserrat', sans-serif; /*definir uma fonte qualquer*/
			box-sizing: border-box; /*alinha o texto ao box*/
		}
	</style>
</head>
<body>
	<div class="dados_livro">
		<b>Título</b><br />
		<?=$livro->titulo?><br />
		<b>Autor</b><br />
		<?=$livro->autor?>
	</div>
	<div class="descricao_livro">
		<h3>Descrição</h2>
		<p><?=$livro->descricao?></p>
	</div>
</body>
</html>