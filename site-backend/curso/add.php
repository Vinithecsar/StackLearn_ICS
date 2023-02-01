<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<?php
       
       include('connection.php');
       
?>  
<body>
	<h1 class="page-header">
		PHP CRUD <small>Criar</small>
	</h1>

	<h2>Adicionar curso</h2>
	<br/>
	<form method="post" action="add_post.php">
                            
		<input placeholder="Id do professor" name="professorid"><br/><br/>
		<input placeholder="Nome do curso" name="nome"><br/><br/>
		<input placeholder="Descrição" name="descricao"><br/><br/>
		<input placeholder="Preço" name="preco"><br/><br/>
		<br/><br/>
		<button type="submit" class="btn btn-success">Registrar curso</button>&nbsp;
		<button type="reset" class="btn btn-warning">Limpar entradas</button>&nbsp;
		<a class="btn btn-info" href="index.php">Retornar</a>

	</form>  
</body>

</html>