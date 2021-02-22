<link rel="stylesheet" href="../form_styles.css">
<?php
include '../connexion.php';

$sql_f = "select * from filiere";
$stmt = $bdd->query($sql_f);
$rows_f = $stmt->fetchAll();
$sql_s = "select * from salle";
$stmt = $bdd->query($sql_s);
$rows_s = $stmt->fetchAll();

?>

<h2>Groupe</h2>
<form id="form1" name="form1" method="post" action="query.php">
    <label for="nom">Nom</label><input type="text" name="nom" id="nom" />
    <br class="clear" />
    <label for="filiere">Filiere</label><select name="filiere" id="filiere">
        <?php
        if ($rows_f) {
            // var_dump($rows);
            for ($i = 0; $i < count($rows_f); $i++) {
                
                echo '<option value='.$rows_f[$i][0].'>' . $rows_f[$i][1] . "</option>";
            }
        }

        ?>
    </select>
    <br class="clear" />
    <label for="salle">Salle</label><select name="salle" id="salle">
    <?php
        if ($rows_s) {
            // var_dump($rows);
            for ($i = 0; $i < count($rows_s); $i++) {
                
                echo "<option value=".$rows_s[$i][0].">" . $rows_s[$i][1] . "</option>";
            }
        }

        ?>
    </select>
    <br class="clear" />
    <input type="submit" name="ajouter" id="ajouter" value="Ajouter" />
    <input type="reset" name="annuler" id="annuler" value="Annuler" />
    <br class="clear" />
</form>
<?php

$sql = "select g.id as id,g.nom as nom,g.filiere as idf,f.nom as nomf,g.salle as ids,s.nom as noms from groupe as g inner join filiere as f inner join salle as s where g.filiere = f.id and g.salle = s.id";
$stmt = $bdd->query($sql);
$rows = $stmt->fetchAll();
var_dump($rows);
?>
<div>
    <h2>liste des groupe</h2>
    <table border>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>id Filiere</th>
            <th>Filiere</th>
            <th>id Salle</th>
            <th>Salle</th>
        </tr>
        <?php
        if ($rows) {
            // var_dump($rows);
            for ($i = 0; $i < count($rows); $i++) {
                echo "<tr>";
                echo "<td>" . $rows[$i]["id"] . "</td>";
                echo "<td>" . $rows[$i]["nom"] . "</td>";
                echo "<td>" . $rows[$i]["idf"] . "</td>";
                echo "<td>" . $rows[$i]["nomf"] . "</td>";
                echo "<td>" . $rows[$i]["ids"] . "</td>";
                echo "<td>" . $rows[$i]["noms"] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</div>