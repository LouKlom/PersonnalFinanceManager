<?php
include("bdd.php");

$id = $_POST["id"];
$date = $_POST["date"];
$category = $_POST["category"];
$value = $_POST["gain"];
$description = $_POST["description"];
$type = "Gain";


$req = "UPDATE entry SET 
        value = '$value',
        date = '$date',
        description = '$description',
        id_category = $category, 
        type = '$type' 
        WHERE id_entry = $id";


$ex = $link->prepare($req);
$ex->execute();


header('Location: ../newGain.php');