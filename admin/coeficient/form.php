<?php
$sqlf = "select * from filiere";
$sqlm = "select * from matiere";
// $id_f = $_GET['id_f'];
$sqlc = "select c.id ,f.nom filiere , m.nom matiere, c.coef from coeficient c inner join filiere f inner join matiere m where c.filiere = f.id and c.matiere = m.id ";
$stmt = $bdd->query($sqlf);
$fil = $stmt->fetchAll();
$stmt = $bdd->query($sqlm);
$mat = $stmt->fetchAll();
$stmt = $bdd->query($sqlc);
$coef = $stmt->fetchAll();


?>

<div class="modal-dialog" role="document">
	<div class="modal-content">

		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Ajouter un Coeficient</h5>
			<button class="close" type="button" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div>
		<form name="form1" method="post" action="query.php">
			<div class="modal-body">


				<div class="form-group row m-1">
					<label class="col-sm-4 mb-3 mb-sm-0" for="filiere">Filiere</label>
					<select name="filiere" id="filiere" class="form-control form-control-user col-sm-5 mb-3 mb-sm-0">
						<?php
						foreach ($fil as $row) {
							echo '<option value=' . $row['id'] . '>' . $row['nom'] . '</option>';
						}
						?>
					</select>
				</div>
				<div class="form-group row m-1">
					<label class="col-sm-4 mb-3 mb-sm-0" for="matiere">Matiere</label>
					<select name="matiere" id="matiere" class="form-control form-control-user col-sm-5 mb-3 mb-sm-0">
						<?php
						foreach ($mat as $row) {
							echo '<option value=' . $row['id'] . '>' . $row['nom'] . '</option>';
						}
						?>
					</select>
				</div>
				<button type="button" name="ajouter" id="add" value="Ajouter" class="btn  btn-primary col-sm-6 mb-3 mb-sm-0">Ajouter</button>

				<!-- <input type="button" value="Ajouter" id="add"> -->
				<!-- <br class="clear" /> -->
				<table class="table-matiere table-striped">
					<tr>
						<th>Filiere</th>
						<th>Matiere</th>
						<th>Coeficient</th>
						<th></th>
						<th></th>
					</tr>
					<?php
					for ($i = 0; $i < count($coef); $i++) {
						echo "<tr>
						<td >" . $coef[$i]['filiere'] . "</td>
						<td >" . $coef[$i]['matiere'] . "</td>
						
						<td><input type='number' name='coeficient' id='coef' value='" . $coef[$i]['coef'] . "' class='form-control form-control-user' /></td>
						<td><a href='#'>Modifier</a></td>
						<td><a href='#'>Supprimer</a></td>
					</tr>";
					}

					?>

				</table>

			</div>
			<div class="modal-footer">
				<div class="btn-block align-content-center ">
					<button type="submit" name="ajouter"  value="Ajouter" class="btn  btn-primary col-sm-6 mb-3 mb-sm-0">Ajouter</button>
					<button type="reset" name="annuler"  value="Annuler" class="btn  btn-secondary col-sm-5 mb-3  mb-sm-0">Annuler</button>
				</div>
			</div>

		</form>


		<script>
			const btn = document.querySelector("#add");
			const table = document.querySelector(".table-matiere");
			const c = document.querySelector("#coef");

			btn.addEventListener("click", function() {
				table.innerHTML += "<tr>" +
					"<td>Math</td>" +
					"<td><input type='number' name='coeficient_1' value='0' /></td>" +
					"<td><a href='#' >Modifier</a></td>" +
					"<td><a href='#' >Supprimer</a></td>"

			})
		</script>

	</div>
</div>