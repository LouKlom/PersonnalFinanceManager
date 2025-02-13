<?php
include("functions/bdd.php");

$reqActive = "SELECT * FROM category WHERE active = TRUE ORDER BY label";
$exActive = $link->prepare($reqActive);
$exActive->execute();

?>

<div class="maincontenttitle">Active Category</div>
<div class="maincontent">
    <table>
        <tr>
            <th>ID</th>
            <th>Label</th>
            <th>Type</th>
            <th>Active</th>
            <th>Options</th>
        </tr>
        <?php
        while ($rowTable = $exActive->fetch()) {
            echo "<tr>";
            echo "<td>" . $rowTable["id_category"] . "</td>";
            echo "<td>" . $rowTable["label"] . "</td>";
            echo "<td>" . $rowTable["category_type"] . "</td>";
            echo "<td>" . $rowTable["active"] . "</td>";
            ?>
            <td>
                <a href="editCategory.php?id=<?php echo $rowTable['id_category']; ?>">
                    <img src="images/edit.png" alt="Modifier" width="20" height="20">
                </a>
                <a href="functions/desactivateCategorie.php?id=<?php echo $rowTable['id_category']; ?>">
                    <img src="images/desactivate.png" alt="Desactivate" width="20" height="20">
                </a>
            </td>
            <?php
            echo "</tr>";
        }
        ?>
    </table>
</div>

<?php

$reqDesactive = "SELECT * FROM category WHERE active = FALSE ORDER BY label";
$exDesactive = $link->prepare($reqDesactive);
$exDesactive->execute();

?>


<div class="maincontenttitle">Desactivated Category</div>
<div class="maincontent">
    <table>
        <tr>
            <th>ID</th>
            <th>Label</th>
            <th>Type</th>
            <th>Active</th>
            <th>Options</th>
        </tr>
        <?php
        while ($rowTable = $exDesactive->fetch()) {
            echo "<tr>";
            echo "<td>" . $rowTable["id_category"] . "</td>";
            echo "<td>" . $rowTable["label"] . "</td>";
            echo "<td>" . $rowTable["category_type"] . "</td>";
            echo "<td>" . $rowTable["active"] . "</td>";
            ?>
            <td>
                <a href="editCategory.php?id=<?php echo $rowTable['id_category']; ?>">
                    <img src="images/edit.png" alt="Modifier" width="20" height="20">
                </a>
                <a href="functions/activateCategorie.php?id=<?php echo $rowTable['id_category']; ?>">
                    <img src="images/activate.png" alt="Activate" width="20" height="20">
                </a>
            </td>
            <?php
            echo "</tr>";
        }
        ?>
    </table>
</div>