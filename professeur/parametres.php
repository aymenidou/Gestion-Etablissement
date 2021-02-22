<link rel="stylesheet" href="../../form_styles.css">
<?php
$formType = "Administrateur";
// if ($table == 'Professeur') {
    include '../config.php';
    $formType = "Professeur";
    $sql = 'select * from matiere';
    $stmt = $bdd->prepare($sql);
    $stmt->execute();
    $matiere = $stmt->fetchAll();

    $sqlF = 'select * from professeur where cin = ? ';
    $stmtF = $bdd->prepare($sqlF);
    $stmtF->bindValue(1,$_SESSION["cne"]);
    $stmtF->execute();
    $professeurs = $stmtF->fetchAll();
    $professeur = $professeurs[0];
// }


?>
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Votre Profile</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>

        <div class="modal-body">
            <form id="form1" name="form1" method="post" action="professeur/query.php" class="align-text-center card p-4">
                <input type="text" name="cin" id="cin" class="form-control form-control-user mb-2" value="<?php echo $professeur["cin"]; ?>" disabled />
                <input type="text" name="nom" id="nom" class="form-control form-control-user mb-2" placeholder="Nom" value="<?php echo $professeur["nom"]; ?>" />
                <input type="text" name="prenom" id="prenom" class="mb-2 form-control form-control-user" placeholder="Prenom" value="<?php echo $professeur["prenom"]; ?>" />
                <div class="form-group mb-2">

                    <label for="genre">Genre</label>
                    <input type="radio" name="genre" value="m" id="genre_0" class="" /><i class="ml-1 fa fa-male" aria-hidden="true"></i> Homme
                    <input type="radio" name="genre" value="f" id="genre_1" class="" /><i class="ml-1 fa fa-female" aria-hidden="true"></i> Femme
                </div>
                <div class="form-group row mb-2">
                    <label for="date_naissance" class="col-sm-5 mb-3 mb-sm-0">Date naissance</label>
                    <input type="date" name="date_naissance" id="date_naissance" class="col-sm-6 mb-3 mb-sm-0 form-control form-control-user"  value="<?php echo $professeur["date_naissance"]; ?>" />
                </div>

                <input type="text" name="adresse" id="adresse" class="form-control form-control-user mb-2" placeholder="Adresse" value="<?php echo $professeur["adresse"]; ?>" />
                <div class="form-group row mb-2">

                    <label for="contrat" class="col-sm-6 mb-3 mb-sm-0">Contrat</label>
                    <select name="contrat" id="contrat" class="form-control form-control-user col-sm-6 mb-3 mb-sm-0">
                        <option value="CDI">CDI</option>
                        <option value="CDD">CDD</option>
                    </select>
                </div>

                <input type="text" name="salaire" id="salaire" class="form-control form-control-user mb-2" placeholder="Salaire" />
                <div class="form-group row mb-2">
                    <label for="date_dembauche" class="col-sm-6 mb-3 mb-sm-0">Date d'embauche</label>
                    <input type="date" name="date_dembauche" id="date_dembauche" class="form-control form-control-user col-sm-6 mb-3 mb-sm-0" placeholder="Date d'embauche" />
                </div>
                <input type="text" name="telephone" id="telephone" class="form-control form-control-user mb-3" placeholder="Telephone" />
                <!-- <br class="clear" />  -->
                <?php
                // if ($table == 'Professeur') {
                    echo '<div class="form-group">
                            <label for="matiere" class="col-sm-6 mb-3 mb-sm-0">Matière</label>
                            <select name="matiere" id="matiere" class="form-control form-control-user col-sm-6 mb-3 mb-sm-0" placeholder="Matiere">';
                    for ($i = 0; $i < count($matiere); $i++) {

                        echo ' <option value=' .  $matiere[$i]['id'] . '>' .  $matiere[$i]['nom'] . '</option>';
                    }
                    echo '</select></div>';
                // }
                ?>

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