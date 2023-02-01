<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<?php
		$id = $_POST['id'];
		$professorid = $_POST['professorid'];
		$nome = $_POST['nome'];
		$descricao = $_POST['descricao'];
		$preco = $_POST['preco'];
		
		include('connection.php');
		
		$query = 'UPDATE cursos set professorid ="'.$professorid.'",
				nome="'.$nome.'", descricao="'.$descricao.'",
				preco="'.$preco.'" WHERE cursoid ="'.$id.'"';
		$result = mysqli_query($db, $query) or die(mysqli_error($db));				
		?>	

		<script type="text/javascript">
			alert("Editado com sucesso.");
			window.location = "index.php";
		</script>
	</body>
</html>
