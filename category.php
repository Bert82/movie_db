<?php

//recuperer connection BDD
require_once ('connexion.php');

//recuperer id si id
//requete pour récuperer categorie
//recuperer la cathegorie

$id = $_GET['id'] ?? null;
$category = null;

if ($id !=null) {
    $query = $db->query('select * from category where id='.$id);
    $category = $query->fetch(PDO::FETCH_ASSOC);
    $url = '?id=' .$id;
} else {
    $url = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="category_save.php<?= $url ?>" method="POST">
        <div>
            <label>Name</label>
            <input type="text" value="<?= $category['name'] ?? '' ?>" name="name" placeholder="Placer ici votre nom">
        </div>

        <input type="submit" value= "envoyer">
    </form>

</body>
</html>