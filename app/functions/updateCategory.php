<?php 
include("bdd.php");


$id = $_POST["id"];
$label = $_POST["label"];
$type = $_POST["categoryType"];



$req = "UPDATE category SET label = '$label', category_type = '$type' WHERE id_category = $id";
$ex = $link->prepare($req);
$ex->execute();


header('Location: ../categoryManagement.php');
