<?php

//recuperer connection BDD
require_once ('connexion.php');

//recuperer id si id
//requete pour récuperer categorie
//recuperer la cathegorie

$id = $_GET['id'] ?? null;

if($id!=null) {
    $query = $db->query("select * from movie where id=$id");
    $movie = $query->fetch(PDO::FETCH_ASSOC);

if ($movie == null) {
    header('location: movie_list.php');
    exit;
}
}

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
    <div class="row">
        <div class="col-md-8 mt-3">

<form method="post" action="movie_save.php<?= $id != null ? "?id=$id" : ''?>">

  <div class="mb-3">
    <label for="name" class="form-label">Nom</label>
    <input type="text" class="form-control" id="name" name="name" value="<?= $movie['name'] ?? '' ?>">
</div>

<div class="mb-3">
    <label for="release" class="form-label">Sortie</label>
    <input type="date" class="form-control" id="release" name="release"value="<?= $movie['release'] ?? '' ?>">
</div>

<div class="mb-3">
    <label for="duration" class="form-label">Durée</label>
    <input type="number" class="form-control" id="duration" name="duration" value="<?= $movie['duration'] ?? '' ?>">
</div>

  <button type="submit" value="envoyer" class="btn btn-primary">Envoyer</button>
</form>
        </div>
    </div>

<div class="row mt-5">
    <div class="col-6">
        <?php include('category_movie.php'); ?>
    </div>


    <div class="col-6">AUTRE CHOSE</div>
</div>

</body>
</html>