<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/form.css">
    <title>New Entry</title>
</head>
<body>
    <div class="main">

        <?php 
        include("Components/head.php"); 
        include("Components/menu.php");
        ?>


        <div class="maincontenttitle">Process a new entry</div>
        <div class="maincontent">
            <form id="formulaire" method="POST" action="functions/newEntree.php">
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input required="required" type="date" id="start" name="date" value="<?php echo date("Y-m-d"); ?>" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="Category">Category</label>
                    <select class="form-control">
                        <option>Test</option>
                        <option>TEST 3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Cost">Cost</label>
                    <input required="required" type="text" id="cost" name="cost" class="form-control" />
                </div>

                

                <div class="form-group">
                    <input type="submit" value="Add new entry" name="Valider" class="btn btn-primary" />
                </div>
            </form>
        </div>



    </div>    
</body>
</html>