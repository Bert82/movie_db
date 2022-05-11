<?php

require_once ('connexion.php');

$request = $db->query('select * from movie');

$movies = $request->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
<a href="movie_edit.php" button class="btn btn-success m-3">Ajouter</a>

    <table class="table table-dark">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>release</th>
            <th>Durée</th>
            <th>Action</th>
        </tr>
    <?php foreach($movies as $movie): ?>
        <tr>
            <td><?php echo $movie ['id'] ?></td>
            <td><?php echo $movie ['name'] ?></td>
            <td><?php echo $movie ['release'] ?></td>
            <td><?php echo $movie ['duration'] ?></td>
            <td>
             <a onclick= "return confirm('voulez-vous vraiment supprimer cet élément?')" href="movie_remove.php?id=<?php echo $movie ['id'] ?>" button class="btn btn-danger">Supprimer</a>
             <a href="movie_edit.php?id=<?= $movie ['id'] ?>" button class="btn btn-success">Modifier</a>
        </td>

        </tr>
    <?php endforeach; ?>

    </table>
</div>
</body>
</html>