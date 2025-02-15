<div class="maincontenttitle">LAST 30 ENTRY</div>
        <div class="maincontent">
        <table>
            <tr>
                <th>ID</th>
                <th>Type</th>
                <th>Cost</th>
                <th>Description</th>
                <th>Date</th>
                <th>Option</th>
            </tr>
            <?php
            $req = "SELECT e.*, c.label AS category_label
                    FROM entry e
                    INNER JOIN category c ON e.id_category = c.id_category
                    WHERE e.type = 'Gain'
                    ORDER BY e.date DESC
                    LIMIT 30;";
            $ex = $link->prepare($req);
            $ex->execute();

            while($row = $ex->fetch())
            {
                ?>
                <tr>
                    <td><?php echo $row["id_entry"]; ?></td>
                    <td><?php echo $row["category_label"]; ?></td>
                    <td><?php echo $row["value"]; ?></td>
                    <td><?php echo $row["description"]; ?></td>
                    <td><?php echo $row["date"]; ?></td>
                    <td>
                    <a href="editGainEntry.php?id=<?php echo $row['id_entry']; ?>">
                        <img src="images/edit.png" alt="Modifier" width="20" height="20">
                    </a>
                    <a href="functions/deleteEntry.php?id=<?php echo $row['id_entry']; ?>">
                        <img src="images/delete.png" alt="Activate" width="20" height="20">
                    </a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
</div>
