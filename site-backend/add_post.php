<html>
	<?php
	include('connection.php');
	?>   

<body>

	<?php
	$nome = $_POST['nome'];
				
	$query = "INSERT INTO professor
			(id, nome)
			VALUES (NULL,'".$nome."')";
	mysqli_query($db,$query) or die ('Erro na base de dados: '.mysqli_error($db));
					
	?>
	
	<script type="text/javascript">
		alert("Adicionado com sucesso.");
		window.location = "index.php";
	</script>

</body>

</html>