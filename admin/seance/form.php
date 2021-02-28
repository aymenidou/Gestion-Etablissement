<?php
$sqlp = "select * from matiere";
$sqlg = "select * from groupe where id = $idgroupe";
$stmt = $bdd->query($sqlp);
$mat = $stmt->fetchAll();
$stmt = $bdd->query($sqlg);
$groupe = $stmt->fetchAll();


?>

<div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="ModalLabel">Ajouter une Séance <?php echo $groupe[0]['nom']; ?></h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <form  name="form1" method="post" action="seance/query.php">
            <div class="modal-body">
            <input type="text" hidden value="<?php echo $idgroupe; ?>" name="groupe" >
                <div class="form-group row m-1">
                    <label class="col-sm-4 mb-3 mb-sm-0" for="matiere">Matiere :</label>
                    <select name="matiere" id="matiere" class="form-control form-control-user col-sm-5 mb-3 mb-sm-0">
                        <?php
                        foreach ($mat as $row) {
                            echo '<option value=' . $row['id'] . '>' . $row['nom'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group row m-1">
                    <label class="col-sm-4 mb-3 mb-sm-0" for="jour">Jour :</label>
                    <select name="jour" id="jour" class="form-control form-control-user col-sm-5 mb-3 mb-sm-0">

                        <option value="Lundi">Lundi</option>
                        <option value="Mardi">Mardi</option>
                        <option value="Mercredi">Mercredi</option>
                        <option value="Jeudi">Jeudi</option>
                        <option value="Vendredi">Vendredi</option>
                        <option value="Samedi">Samedi</option>

                    </select>
                </div>
                <div class="form-group row m-1">
                    <label class="col-sm-4 mb-3 mb-sm-0" for="heure_d">Heure début :</label>
                    <select name="heure_d" id="heure_d" class="form-control form-control-user col-sm-5 mb-3 mb-sm-0">

                        <option value="08:00">08:00</option>
                        <option value="09:00">09:00</option>
                        <option value="10:00">10:00</option>
                        <option value="11:00">11:00</option>
                        <option value="14:00">14:00</option>
                        <option value="15:00">15:00</option>
                        <option value="16:00">16:00</option>
                        <option value="17:00">17:00</option>

                    </select>
                </div>
                <div class="form-group row m-1">
                    <label class="col-sm-4 mb-3 mb-sm-0" for="duree">Durée :</label>

                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-primary m-1 " id="d_1">
                            <input type="radio" name="duree" value="1"> 1 H
                        </label>
                        <label class="btn btn-primary m-1" id="d_2">
                            <input type="radio" name="duree" value="2"> 2 H
                        </label>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <div class="btn-block align-content-center ">
                    <button type="submit" name="ajouter"  value="Ajouter" class="btn  btn-primary col-sm-6 mb-3 mb-sm-0">Ajouter</button>
                    <button type="reset" name="annuler"  value="Annuler" class="btn  btn-secondary col-sm-5 mb-3  mb-sm-0">Annuler</button>
                </div>
            </div>

        </form>
    </div>
</div>
<script>
    let heure_d = document.querySelector("#heure_d");
    let d_1 = document.querySelector("#d_1");
    let d_2 = document.querySelector("#d_2");

    heure_d.addEventListener('change', function() {

        if (heure_d.value == "11:00" || heure_d.value == "17:00") {
            d_2.style.display = 'none';
        } else {
            d_2.style.display = '';
        }

    });
</script>