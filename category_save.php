<?php

require_once ('connexion.php');

$id = $_GET['id'] ?? null;


if(!isset($_POST['name']) || empty($_POST['name'])) {
    echo 'le nom est obligatoire !';
    exit;
}

$name = $_POST['name'];


if($id !=null){
    $result=$db->query("update category set name='$name' where id=$id");
}else{
    $result=$db->query('insert into category (name) values ("'.$name.'")');
}

//si edition
    //update
//sinon

header('location: category_list.php');
