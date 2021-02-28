<!-- <link rel="stylesheet" href="../form_styles.css"> -->
<?php
// include '../connexion.php';

$sql_f = "select * from filiere";
$stmt = $bdd->query($sql_f);
$rows_f = $stmt->fetchAll();
$sql_s = "select * from salle";
$stmt = $bdd->query($sql_s);
$rows_s = $stmt->fetchAll();

?>
<div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ajouter un Groupe</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
            <form  name="form1" method="post" action="groupe/query.php">
        <div class="modal-body">


                <input type="text" name="nom" id="nom" class="form-control form-control-user mb-2" placeholder="Nom" />
                <div class="form-group row m-1">
                    <label class="col-sm-4 mb-3 mb-sm-0" for="filiere">Filiere</label>
                    <select name="filiere" id="filiere" class="form-control form-control-user col-sm-5 mb-3 mb-sm-0">
                        <?php
                        foreach ($rows_f as $row) {
                            echo '<option value=' . $row['id'] . '>' . $row['nom'] . '</option>';
                        }
                        ?>
                    </select>
                </div>
                
                <div class="form-group row m-1">
                    <label class="col-sm-4 mb-3 mb-sm-0" for="salle">Salle</label>
                    <select name="salle" id="salle" class="form-control form-control-user col-sm-5 mb-3 mb-sm-0">
                        <?php
                        foreach ($rows_s as $row) {
                            echo '<option value=' . $row['id'] . '>' . $row['nom'] . '</option>';
                        }
                        ?>
                    </select>
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
