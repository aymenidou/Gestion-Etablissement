<link rel="stylesheet" href="../../form_styles.css">
<?php
include '../config.php';

$sqlF = 'select * from etudiants where cne = ? ';
$stmtF = $bdd->prepare($sqlF);
$stmtF->bindValue(1, $_SESSION["cne"]);
$stmtF->execute();
$etudiants = $stmtF->fetchAll();
$etudiant = $etudiants[0];
$avatar = $etudiant["avatar"];
if ($avatar == "") {
    if ($etudiant["genre"] == "m") {
        $avatar = "https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light";
    }
    if ($etudiant["genre"] == "f") {
        $avatar = "https://avataaars.io/?avatarStyle=Circle";
    }
}
// }


?>
<form id="form1" name="form1" method="post" action="updateProfile.php" >
<div class="">
    <div class="row gutters">
        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="account-settings">
                        <div class="user-profile">
                            <div class="user-avatar">
                                <img src="<?php echo $avatar?>" alt="Avatar">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h6 class="mb-2 text-primary">Données Personnels</h6>
                        </div>
                        <input type="text" value="<?php echo $avatar?>" hidden name="avatar"/>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="cne">CNE</label>
                                <input type="text" class="form-control" id="cne" name="cne" value="<?php echo $etudiant['cne'];?>" readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" value="<?php echo $etudiant['nom'];?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prenom" value="<?php echo $etudiant['prenom'];?>">
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre Adresse" value="<?php echo $etudiant['adresse'];?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="date_naissance">Date naissance</label>
                                <input type="text" class="form-control" id="date_naissance" name="date_naissance"  value="<?php echo $etudiant['date_naissance'];?>">
                            </div>
                        </div>
                        
                        
                        
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-right">
                                <button type="reset" id="reset" name="reset" class="btn btn-secondary">Annuler</button>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<script src="../vendor/jquery/jquery.min.js"></script>