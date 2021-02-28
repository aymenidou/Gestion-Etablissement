<link rel="stylesheet" href="../form_styles.css">
<h2>Salle</h2>
<form  name="form1" method="post" action="query.php">
    <label for="nom">Nom</label><input type="text" name="nom" id="nom" />
    <br class="clear" />
    <label for="description">Description</label><input type="text" name="description" id="description" />
    <br class="clear" />
    <input type="submit" name="ajouter"  value="Ajouter" />
    <input type="reset" name="annuler"  value="Annuler" />
    <br class="clear" />
</form>
<?php
include '../connexion.php';
    $sql = "select * from salle";
    $stmt = $bdd->query($sql);
    $rows = $stmt->fetchAll();
    ?>
    <div>
        <h2>liste des filiere</h2>
        <table border>
            <tr>
                <th>id</th>
                <th>Filiere</th>
                <th>Description</th>
            </tr>
            <?php
            if ($rows) {
                // var_dump($rows);
                for ($i = 0; $i < count($rows); $i++) {
                    echo "<tr>";
                    echo "<td>" . $rows[$i][0] . "</td>";
                    echo "<td>" . $rows[$i][1] . "</td>";
                    echo "<td>" . $rows[$i][2] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>