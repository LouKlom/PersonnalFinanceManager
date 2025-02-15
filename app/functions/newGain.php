<?php
include("bdd.php");

$date = $_POST['date'];
$id_category = $_POST['category'];
$gain = $_POST['gain'];
$description = $_POST['description'];
$type = "Gain";

$req = "INSERT INTO entry (value, date, description, id_category, type) VALUES ($gain, '$date', '$description', $id_category, '$type')";
$ex = $link->prepare($req);
$ex->execute();


header('Location: '.$_SERVER['HTTP_REFERER'].'');