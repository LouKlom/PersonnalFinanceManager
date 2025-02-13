<?php

include("bdd.php");

$category = $_POST["category"];
$type = $_POST["categoryType"];


$req = "INSERT INTO category (label, category_type, active) VALUES ('$category', '$type', TRUE)";
$ex = $link->prepare($req);
$ex->execute();


header('Location: '.$_SERVER['HTTP_REFERER'].'');