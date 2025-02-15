<div class="maincontenttitle">Process a new cost</div>
        <div class="maincontent">
            <form id="formulaire" method="POST" action="functions/newCost.php">
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input required="required" type="date" id="start" name="date" value="<?php echo date("Y-m-d"); ?>" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="Category">Category</label>
                    <select name="category" class="form-control">
                        <?php 
                            $req = "SELECT * FROM category WHERE category_type = 'Cost' AND active = 1 ORDER BY label ASC";
                            $ex = $link->prepare($req);
                            $ex->execute();

                            while($row = $ex->fetch()) 
                            {
                                echo '<option value="'.$row['id_category'].'">'.$row['label'].'</option>';
                            }
                         ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="Cost">Cost</label>
                    <input required="required" type="text" id="cost" name="cost" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" id="description" name="description" class="form-control" />
                </div>

                <div class="form-group">
                    <input type="submit" value="Add new entry" name="Valider" class="btn btn-primary" />
                </div>
            </form>
        </div>