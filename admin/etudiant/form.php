<link rel="stylesheet" href="../../form_styles.css">
<?php

$sqlg = "select * from groupe";
$sqln = "select * from niveau";
//get groupes
$stmt = $bdd->prepare($sqlg);
$stmt->execute();
$rowsg = $stmt->fetchAll();
//get niveau
$stmt = $bdd->prepare($sqln);
$stmt->execute();
$rowsn = $stmt->fetchAll();


?>

<div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter un étudiant</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form1" name="form1" method="post" action="etudiant/query.php" class="align-text-center card p-4">
                <input type="text" name="cne" id="cne" class="form-control form-control-user mb-2" placeholder="CNE" 
                 />
                <input type="text" name="nom" id="nom" class="form-control form-control-user mb-2" placeholder="Nom" />
                <input type="text" name="prenom" id="prenom" class="mb-2 form-control form-control-user" placeholder="Prenom" />

                <div class="form-group mb-2">

                    <label for="genre">Genre</label>
                    <input type="radio" name="genre" value="m" id="genre_0" class="" /><i class="ml-1 fa fa-male" aria-hidden="true"></i> Homme
                    <input type="radio" name="genre" value="f" id="genre_1" class="" /><i class="ml-1 fa fa-female" aria-hidden="true"></i> Femme
                </div>
                <div class="form-group row mb-2">
                    <label for="date_naissance" class="col-sm-5 mb-3 mb-sm-0">Date naissance</label>
                    <input type="date" name="date_naissance" id="date_naissance" class="col-sm-6 mb-3 mb-sm-0 form-control form-control-user" />
                </div>
                <input type="text" name="adresse" id="adresse" class="form-control form-control-user mb-2" placeholder="Adresse" />

                <div class="form-group row mb-2">
                    <label for="date_inscription" class="col-sm-5 mb-3 mb-sm-0">Date inscription</label>
                    <input type="date" name="date_inscription" id="date_inscription" class="col-sm-6 mb-3 mb-sm-0 form-control form-control-user" />
                </div>
                <!-- <div class="form-group">
                    <label for="filiere" class="col-sm-6 mb-3 mb-sm-0">Filiere</label>

                    <select name="filiere" id="filiere" class="form-control form-control-user col-sm-6 mb-3 mb-sm-0" > -->
                        <?php
                        // foreach ($rowsf as $row) {
                        //     echo '<option value=' . $row['id'] . '>' . $row['nom'] . '</option>';
                        // }
                        ?>
                    <!-- </select>
                </div> -->
                <div class="form-group">
                    <label class="col-sm-6 mb-3 mb-sm-0" for="groupe">Groupe</label>
                    <select name="groupe" id="groupe" class="form-control form-control-user col-sm-6 mb-3 mb-sm-0" >
                        <?php
                        foreach ($rowsg as $row) {
                            echo '<option value=' . $row['id'] . '>' . $row['nom'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-sm-6 mb-3 mb-sm-0" for="niveau">Niveau</label>
                    <select name="niveau" id="niveau" class="form-control form-control-user col-sm-6 mb-3 mb-sm-0" >
                        <?php
                        foreach ($rowsn as $row) {
                            echo '<option value=' . $row['id'] . '>' . $row['nom'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
        </div>
        <div class="modal-footer">

            <div class="btn-block align-content-center ">
                <button type="submit" name="ajouter" id="ajouter" value="Ajouter" class="btn  btn-primary col-sm-6 mb-3 mb-sm-0">Ajouter</button>
                <button type="reset" name="annuler" id="annuler" value="Annuler" class="btn  btn-secondary col-sm-5 mb-3  mb-sm-0">Annuler</button>
            </div>
        </div>
        </form>

    </div>
</div>