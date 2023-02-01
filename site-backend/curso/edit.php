<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<?php
	include('connection.php');
?>  
<body>

	<h1 class="page-header">
		PHP CRUD <small>Editar</small>
	</h1>

	<?php 
	$query = 'SELECT * FROM cursos WHERE cursoid ='.$_GET['id'];
	$result = mysqli_query($db, $query) or die(mysqli_error($db));

	while($row = mysqli_fetch_array($result)) {

		$id= $row['cursoid'];
		$professorid= $row['professorid'];
		$nome= $row['nome'];
		$descricao= $row['descricao'];
		$preco= $row['preco'];
	}
              
	?>

	<h2>Editar curso</h2>

	<form method="post" action="edit_post.php">
                            
	    	<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<input placeholder="ProfessorId" name="professorid" value="<?php echo $professorid; ?>"><br/><br/>
		<input placeholder="Nome" name="nome" value="<?php echo $nome; ?>"><br/><br/>
		<input placeholder="Descrição" name="descricao" value="<?php echo $descricao; ?>"><br/><br/>
		<input placeholder="Preço" name="preco" value="<?php echo $preco; ?>"><br/><br/>
		<button type="submit" >Atualizar curso</button>
		<a href="index.php">Retornar</a>

	</form>  
</body>

</html>