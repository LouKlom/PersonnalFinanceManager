<div class="maincontenttitle">New Category</div>
        <div class="maincontent">
            <form id="formulaire" method="POST" action="functions/newCategory.php">

                <div class="form-group">
                    <label for="category">Category Name</label>
                    <input required="required" type="text" id="category" name="category" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="CategoryType">Category type</label>
                    <select name="categoryType" class="form-control">
                        <option>Gain</option>
                        <option>Cost</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" value="Add new Category" name="Valider" class="btn btn-primary" />
                </div>
            </form>
</div>