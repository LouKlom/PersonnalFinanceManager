<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Category Management</title>
</head>
<body>
    <div class="main">

        <?php 
        include("Components/head.php"); 
        include("Components/menu.php");
        include("functions/bdd.php");
        ?>

<div class="maincontenttitle">Edit Category</div>
        <div class="maincontent">
            <form id="formulaire" method="POST" action="functions/updateCategory.php">
                <?php
                    $id = $_GET["id"];
                    $req = "SELECT * FROM category WHERE id_category = $id";
                    $ex = $link->prepare($req);
                    $ex->execute();
                    $row = $ex->fetch();
                ?>
                <div class="form-group">
                    <label for="category">Category Name</label>
                    <input required="required" type="text" id="label" name="label" value="<?php echo $row['label']; ?>" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="CategoryType">Category type</label>
                    <select name="categoryType" class="form-control">
                        <option>Gain</option>
                        <option>Cost</option>
                    </select>
                </div>

                <input type="hidden" name="id" value="<?php echo $id; ?>">

                <div class="form-group">
                    <input type="submit" value="Update Category" name="Valider" class="btn btn-primary" />
                </div>
            </form>
</div>



    </div>  
</body>
</html>