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
    <title>StackLearn | Lista Cursos</title>
</head>
<header>
   <figure>
    <img src="/img/NOVA.png" alt="logo do site">
   </figure>
   <h1>StackLearn</h1>
</header>
<body>
    <main>
        <h2>Cursos</h2>
       <section class="container">
        <?php
            $query = 'SELECT * FROM cursos';
            $result = mysqli_query($db, $query) or die(mysqli_error($db)):
            while($row = mysqli_fetch_assoc($result)){
                echo '<div><h3>'.$row['nome'].'</h3><ul><li class="lista1"><a href="details.php?id='.$row['cursoid'].'" >'.$row['preco'].'</a></li></ul>';
            }
        ?>
    </main>
    <footer>
        <ul>
            <li>IFRN</li>
            <li>INFOWEB</li>
            <li>2023</li>
        </ul>
        <picture>
            <img src="/img/NOVA.png" alt="logo do site ">
        </picture>
    </footer>
</body>
</html>
