<?php
    include('connection.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ics.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>StackLearn | Details cursos</title>
</head>
<header>
   <figure>
    <img src="/img/NOVA.png" alt="logo do site">
   </figure>
   <h1>StackLearn</h1>
</header>
<body>
        <?php 
        $query = 'SELECT * FROM cursos WHERE cursoid ='.$_GET['id'];
        $result = mysqli_query($db, $query) or die(mysqli_error($db));
        
        while($row = mysqli_fetch_array($result)) {
    
            $id = $row['cursoid'];
                    $nome = $row['nome'];
                    $descricao = $row['descricao'];
                    $preco = $row['preco'];
                 
          }
                  
        ?>
        <h2><?php echo $nome; ?></h2>
        <section class="a" style="display:flex; justify-items: space-between">
        <img src="/img/exemplo.png" style="height: 100px; width: 200px">
        <section class="a" style="display:flex; flex-direction: column; align-items: center;">
            <h3> <?php echo $descricao; ?></h3>
            <a class='btn btn-warning' href="#" style="text-align:center;"> R$<?php echo $preco; ?></a>
        </section>
        </section>
    <footer>
        <ul>
            <li>IFRN</li>
            <li>INFOWEB</li>
            <li>2023</li>
        </ul>
        <picture>
            <img src="/img/NOVA.png" alt="logo do site" style="border-radius: 12px";>
        </picture>
    </footer>
</body>
</html>
