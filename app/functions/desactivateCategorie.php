<?php 
include("bdd.php");

$id = $_GET["id"];

$req = "UPDATE category SET active = FALSE WHERE id_category = $id";
$ex = $link->prepare($req);
$ex->execute();


header('Location: '.$_SERVER['HTTP_REFERER'].'');