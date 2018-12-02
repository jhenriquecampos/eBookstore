<?php
	

	/*
		Esse arquivo tem como objetivo listar todos os livros passados como json à partir de consulta no banco de dados.
	*/




	$arquivo = file_get_contents("livros.json"); //carregar arquivo .json
	$lista_livros = json_decode($arquivo); //decodificar e transformar arquivo json em um objeto

?>


<!DOCTYPE html>
<html>
<head>
	<title>Livraria</title>
	<style type="text/css">
		table, th, td {
			border: 1px solid black;
			padding: 5px;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>Título</th>
				<th>Autor</th>
			</tr>
		</thead>
		<tbody>
			<?php printar_tabela($lista_livros); ?>
		</tbody>
	</table>
</body>
</html>


<?php

	function printar_tabela($lista_livros) {
		foreach ($lista_livros as $livro) {
			echo "<tr>";
			echo 
				"<td>
					<a href='#linkSPRING'>
						$livro->titulo
					</a>
				</td>"; // Colocar no href o link da aplicação SPRING que retornará o json do livro selecionado
			echo "<td>$livro->autor</td>";
			echo "</tr>";
		}
	}

?>
