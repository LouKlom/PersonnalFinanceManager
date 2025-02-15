<?php
include("bdd.php");

$date = $_POST['date'];
$id_category = $_POST['category'];
$cost = $_POST['cost'];
$description = $_POST['description'];
$type = "Cost";

$req = "INSERT INTO entry (value, date, description, id_category, type) VALUES ($cost, '$date', '$description', $id_category, '$type')";
$ex = $link->prepare($req);
$ex->execute();


header('Location: '.$_SERVER['HTTP_REFERER'].'');