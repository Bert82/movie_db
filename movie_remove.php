<?php

require_once ('connexion.php');

//$id = isset($_GET['id']) ? $_GET['id'] : null;
$id = $_GET['id'] ?? null;

if ($id == null) {
    return header('location: movie_list.php');
}

// Forcer le type
$id = (int) $id;

$query = $db->query('delete from movie where id='. $id);

if($query == false) {
    exit ('une erreur c\'est produite, veuillez réessayer plus tard !');
}

if($query->rowCount() === 0){
    exit('Enregistrement inconnu !!!');
}


return header('location: movie_list.php');
