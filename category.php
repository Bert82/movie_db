<?php
//recuperer id si id
$id = $_GET['id'] ?? null;

//recuperer connection BDD
require_once ('connexion.php');

//requete pour récuperer categorie
$query = $db->query('select from category');

//print_r categorie;


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
    <form action="category_save.php" method="POST">
        <div>
            <label>Name</label>
            <input type="text" value="" name="name" placeholder="Placer ici votre nom">
        </div>

        <input type="submit" value= "envoyer">
    </form>

</body>
</html>