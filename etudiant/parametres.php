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
<div class="container" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Votre Profile</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>

        <div class="modal-body align-text-center card p-4">
            <form id="form1" name="form1" method="post" action="updateProfile.php" >
                <div class="form-group mb-2">
                    
                        
                        <img src="<?php echo $avatar; ?>" alt="" id="" class="w-25 border avatar">
                        <input type="text" name="avatar" id="avatar" class="divavatar col-sm-7 mb-3 mb-sm-0 form-control form-control-user" value="<?php echo $avatar; ?>" hidden />
                        <button type="button" class="btn btn-primary btn-user random col-sm-2 mb-3 mb-sm-0 form-control form-control-user">Random</button>
                </div>
                <div class="form-group mb-2 ">
                    <input type="text" name="cne" id="cne" class="col-sm-5 form-control form-control-user mb-2" value="<?php echo $etudiant["cne"];  ?>" readonly />
                </div>
                <div class="form-group row mb-2 ">
                    <label for="nom" class="col-sm-5">Nom : </label>
                    <input type="text" name="nom" id="nom" class="col-sm-3 mb-3 mb-sm-0 form-control form-control-user " placeholder="Nom" value="<?php echo $etudiant["nom"]; ?>" />
                </div>
                <div class="form-group row mb-2 ">

                    <label for="nom" class="col-sm-5">Prenom : </label>
                    <input type="text" name="prenom" id="prenom" class="col-sm-3 mb-3 mb-sm-0  form-control form-control-user" placeholder="Prenom" value="<?php echo $etudiant["prenom"]; ?>" />
                </div>
                <div class="form-group row mb-2">
                    <label for="date_naissance" class="col-sm-5 mb-3 mb-sm-0">Date naissance</label>
                    <input type="date" name="date_naissance" id="date_naissance" class="col-sm-5 mb-2 mb-sm-0 form-control form-control-user" value="<?php echo $etudiant["date_naissance"]; ?>" />
                </div>
                <div class="form-group row mb-2">
                    <label for="adresse" class="col-sm-5 mb-3 mb-sm-0">Adresse : </label>
                    <input type="text" name="adresse" id="adresse" class="form-control form-control-user mb-2 col-sm-5 mb-3 mb-sm-0" placeholder="Adresse" value="<?php echo $etudiant["adresse"]; ?>" />
                </div>
                

        </div>
        <div class="modal-footer">
            <div class="btn-block align-content-center ">
                <button type="submit" name="ajouter" id="ajouter" value="Ajouter" class="btn  btn-primary col-sm-6 mb-3 mb-sm-0">Enregistrer</button>
                <button type="reset" name="annuler" id="annuler" value="Annuler" class="btn  btn-secondary col-sm-5 mb-3  mb-sm-0">Annuler</button>
            </div>
        </div>

        </form>
    </div>
</div>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="avatar.js"></script>
<script>
    const generator = new AvatarGenerator();

    const img = document.querySelector('.avatar');
    const btn = document.querySelector('.random');
    const div = document.querySelector('.divavatar');
    btn.addEventListener('click', function() {
        var link = generator.generateRandomAvatar();
        img.src = link;
        console.log(link);
        div.value=link;
        
    });
</script>