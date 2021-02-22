<link rel="stylesheet" href="../form_styles.css">
<h2>Coeficient</h2>
<form id="form1" name="form1" method="post" action="query.php">
	<label for="filiere">Niveau</label><select name="filiere" id="filiere">
		<option value="">2Bac</option>
		<option value="">1Bac</option>
		<option value="">TC</option>
	</select>
	<br class="clear"/>
	<label for="filiere">Filiere</label><select name="filiere" id="filiere">
		<option value="">PC</option>
	</select>
	<br class="clear" /> 
	<label for="matiere">Matiere</label><select name="matiere" id="matiere">
		<option value="">Math</option>
		<option value="">SVT</option>
		<option value="">PC</option>
		<option value="">ANG</option>
	</select> <input type="button" value="Ajouter" id="add" >
	<br class="clear" /> 
	<table class="table" border>
		<tr>
			<th>Matiere</th>
			<th>Coeficient</th>
		</tr>
		<tr>
			<td>Math</td>
			<td><input type="number" name="coeficient_1" id="coef" value="0" /></td>
			<td><a href="#" >Modifier</a></td>
			<td><a href="#" >Supprimer</a></td>
		</tr>
	</table>
	<input type="submit" name="ajouter" id="ajouter" value="Ajouter" />
<input type="reset" name="annuler" id="annuler" value="Annuler" />
<br class="clear" /> 
</form>
<script>
const btn = document.querySelector("#add");
const table = document.querySelector(".table");
const c = document.querySelector("#coef");

btn.addEventListener("click",function(){
table.innerHTML += "<tr><td>Math</td><td><input type='number' name='coeficient_1' value='0' /></td><td><a href='#' >Modifier</a></td><td><a href='#' >Supprimer</a></td>"

})
</script>

<?php
include '../connexion.php';
    $sql = "select * from filiere";
    $stmt = $bdd->query($sql);
    $rows = $stmt->fetchAll();
    ?>
    <div>
        <h2>liste des filiere</h2>
        <table border>
            <tr>
                <th>id</th>
                <th>Filiere</th>
                <th>Matiere</th>
                <th>Coeficient</th>
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