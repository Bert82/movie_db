<?php
require_once ('connexion.php');
$movieId = $_GET['id'] ?? null; //recuperer id de l'utilisateur

if($movieId != null) :

$query = $db->query('SELECT cm.*, c.name FROM movie_db.category_movie as cm
join category as c on c.id = cm.category_id
where movie_id='.$movieId);

$categories = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<h3>Catégories</h3>
<a href="" class="btn btn-success btn-sm mt-3 mb-3">Ajouter</a>
    <ul class="list-group">
        <?php foreach($categories as $c):  ?>
        <li class="list-group-item">
            <div class="d-flex bd-highlight">
                <div class="bd-highlight"><?= $c['name']?></div>
                     <div class="ms-auto bd-highlight">
                     <a href="" class="btn btn-danger btn-sm">S</a></div>
        </div>

        </li>
        <?php endforeach; ?>

    </ul>


<?php
endif;
?>
