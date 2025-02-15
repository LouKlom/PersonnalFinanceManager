<?php include("functions/bdd.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/table.css">
    <title>New Gain</title>
</head>
<body>
    <div class="main">

        <?php 
        include("Components/head.php"); 
        include("Components/menu.php");
        include("Components/newGainForm.php");
        include("Components/lastEntryGainTable.php");
        ?>


    </div>    
</body>
</html>