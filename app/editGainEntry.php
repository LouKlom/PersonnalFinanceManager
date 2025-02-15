<?php include("functions/bdd.php"); 
$id = $_GET["id"];
$reqEntry = "SELECT * FROM entry WHERE id_entry = $id";
$exEntry = $link->prepare($reqEntry);
$exEntry->execute();
$rowEntry = $exEntry->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/form.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="main">

        <?php 
        include("Components/head.php"); 
        include("Components/menu.php");
        ?>

        <div class="maincontenttitle">Edit gain N°<?php echo $id;?></div>
                <div class="maincontent">
                    <form id="formulaire" method="POST" action="functions/editGain.php">
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input required="required" type="date" id="start" name="date" value="<?php echo date("Y-m-d"); ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label for="Category">Category</label>
                            <select name="category" class="form-control">
                                <?php 
                                    $req = "SELECT * FROM category WHERE category_type = 'Gain' AND active = 1 ORDER BY label ASC";
                                    $ex = $link->prepare($req);
                                    $ex->execute();

                                    while($rowSelect = $ex->fetch()) 
                                    {
                                        echo '<option value="'.$rowSelect['id_category'].'">'.$rowSelect['label'].'</option>';
                                    }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="Gain">Gain</label>
                            <input required="required" type="text" id="gain" name="gain" class="form-control" value="<?php echo $rowEntry["value"]?>"/>
                        </div>

                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" id="description" name="description" class="form-control" value="<?php echo $rowEntry["description"]?>"/>
                        </div>

                        <input type="hidden" name="id" value="<?php echo $id; ?>">

                        <div class="form-group">
                            <input type="submit" value="Add new entry" name="Valider" class="btn btn-primary" />
                        </div>
                    </form>
        </div>



    </div>    
</body>
</html>