<?php
include("bdd.php");

$id = $_GET["id"];



$req = "DELETE FROM entry WHERE id_entry = $id";
$ex = $link->prepare($req);
$ex->execute();

header('Location: '.$_SERVER['HTTP_REFERER'].'');