<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<?php
	include('connection.php');

?>
<body>
	<div class="container">
	<h1>CRUD Cursos<span class="badge badge-secondary"></h1>
	<br/>
	
	<a href="add.php" class="btn btn-success"> Criar novo curso</a>
	
	<br/>
	
	<table border="1" class="table table-striped">
		<thead>
			<tr>
				<th scope="col">Id curso </th>
				<th scope="col">Id professor </th>
				<th scope="col">Nome</th>
				<th scope="col">Descrição</th>
				<th scope="col">Preço</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$query = 'SELECT * FROM cursos';
		$result = mysqli_query($db, $query) or die(mysqli_error($db));
		
		while($row = mysqli_fetch_assoc($result)){
			echo '<tr>';
				echo '<td>'. $row['cursoid'].'</td>';
				echo '<td>'. $row['professorid']. '</td>';
				echo '<td>'. $row['nome']. '</td>';
				echo '<td>'. $row['descricao']. '</td>';
				echo '<td>'. $row['preco']. '</td>';
			echo '<td>';
				echo '<a class="btn btn-primary" href="details.php?id='.$row['cursoid'].'"> Detalhes </a><br/>';
				echo '<a class="btn btn-warning" href="edit.php?id='.$row['cursoid'].'"> Editar </a><br/>';
				echo '<a class="btn btn-danger" href="delete.php?id='.$row['cursoid'].'"> Remover </a><br/>';
			echo'</tr>';
		}
		?>
		</tbody>
		</table>
	</div>
</body>
