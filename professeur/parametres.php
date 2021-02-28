<?php
include '../config.php';
$sql = 'select * from matiere';
$stmt = $bdd->prepare($sql);
$stmt->execute();
$matiere = $stmt->fetchAll();

$sqlF = 'select * from professeur where cin = ? ';
$stmtF = $bdd->prepare($sqlF);
$stmtF->bindValue(1, $_SESSION["cne"]);
$stmtF->execute();
$professeurs = $stmtF->fetchAll();
$professeur = $professeurs[0];
$avatar = $professeur["avatar"];
if ($avatar == "") {
    if ($professeur["genre"] == "m") {
        $avatar = "https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light";
    }
    if ($professeur["genre"] == "f") {
        $avatar = "https://avataaars.io/?avatarStyle=Circle";
    }
}
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
                                <label for="cin">CIN</label>
                                <input type="text" class="form-control" id="cin" name="cin" value="<?php echo $professeur['cin'];?>" readonly>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" value="<?php echo $professeur['nom'];?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="prenom">Prenom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prenom" value="<?php echo $professeur['prenom'];?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="telephone">Telephone</label>
                                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Votre telephone" value="<?php echo $professeur['telephone'];?>">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row gutters">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="adresse">Adresse</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Votre Adresse" value="<?php echo $professeur['adresse'];?>">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label for="date_naissance">Date naissance</label>
                                <input type="text" class="form-control" id="date_naissance" name="date_naissance"  value="<?php echo $professeur['date_naissance'];?>">
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