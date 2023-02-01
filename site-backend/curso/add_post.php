<html>
	<?php
	include('connection.php');
	?>   

<body>

	<?php
	$professorid = $_POST['professorid'];
	$nome = $_POST['nome'];
	$desc = $_POST['descricao'];
	$preco = $_POST['preco'];
				
	$query = "INSERT INTO cursos
			(cursoid, professorid, nome, descricao, preco)
			VALUES (NULL,'".$professorid."','".$nome."','".$desc."','".$preco."')";
	mysqli_query($db,$query) or die ('Erro na base de dados: '.mysqli_error($db));
					
	?>
	
	<script type="text/javascript">
		alert("Adicionado com sucesso.");
		window.location = "index.php";
	</script>

</body>

</html>