<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<?php
       include('connection.php');
?>  
<body>

	<h1 class="page-header">
		PHP CRUD <small>Detalhes</small>
	</h1>

	<?php 
	$query = 'SELECT * FROM cursos WHERE cursoid ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));
	
	while($row = mysqli_fetch_array($result)) {

		$id = $row['cursoid'];
                $professorid = $row['professorid'];
                $descricao = $row['descricao'];
                $nome = $row['nome'];
                $preco = $row['preco'];
  	}
              
	?>

	<h2>Detalhes de curso</h2>
	<table>
		<tbody>
			<tr>
				<td><strong>Id do curso:</strong></td>
				<td><?php echo $id; ?></td>
			</tr>
			<tr>
				<td><strong>Id do professor:</strong></td>
				<td><?php echo $professorid; ?></td>
			</tr>
			<tr>
				<td><strong>Nome do curso:</strong></td>
				<td><?php echo $nome; ?></td>
			</tr>
			<tr>
				<td><strong>Descrição:</strong></td>
				<td><?php echo $descricao; ?></td>
			</tr>
			<tr>
				<td><strong>Preço:</strong></td>
				<td><?php echo $preco; ?></td>
			</tr>
		</tbody>
	</table>
	<a href="index.php">Retornar</a></td>

</body>

</html>
