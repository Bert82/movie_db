<?php

require_once ('connexion.php');

if(!isset($_POST['name']) || empty($_POST['name'])) {
    echo 'le nom est obligatoire !';
    exit;
}

$name = $_POST['name'];

$bd->query('insert into category (name) values ("'.$name'")');


