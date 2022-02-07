<?php
//phpinfo();

$user= 'eleve';
$pass= 'eleve';

try {
    $db = new PDO('mysql:host=localhost;port=3307;dbname=movie_db', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
