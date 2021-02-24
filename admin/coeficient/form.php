<?php  
$sqlf="select * from filiere";
$sqlm="select * from matiere";
$sqlc="select c.id ,f.nom , m.nom from coeficient c inner join filiere f inner join matiere m where c.filiere = f.id and c.matiere = m.id";
$stmt = $bdd->query($sqlf);
$stmt = $bdd->query($sqlf);
$stmt = $bdd->query($sqlf);

?>

<div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter un Coeficient</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">


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
	</div>
	<div class="modal-footer">
            <div class="btn-block align-content-center ">
                <button type="submit" name="ajouter" id="ajouter" value="Ajouter" class="btn  btn-primary col-sm-6 mb-3 mb-sm-0">Ajouter</button>
                <button type="reset" name="annuler" id="annuler" value="Annuler" class="btn  btn-secondary col-sm-5 mb-3  mb-sm-0">Annuler</button>
            </div>
        </div>

</form>
<script>
const btn = document.querySelector("#add");
const table = document.querySelector(".table");
const c = document.querySelector("#coef");

btn.addEventListener("click",function(){
table.innerHTML += "<tr><td>Math</td><td><input type='number' name='coeficient_1' value='0' /></td><td><a href='#' >Modifier</a></td><td><a href='#' >Supprimer</a></td>"

})
</script>


    