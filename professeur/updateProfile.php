<?php 
include '../config.php';
$cin =$_POST['cin'];
$nom =$_POST['nom'];
$prenom =$_POST['prenom'];
$date_naissance =$_POST['date_naissance'];
$adresse =$_POST['adresse'];
$telephone =$_POST['telephone'];
$avatar =$_POST['avatar'];

$sql = "UPDATE professeur SET nom = ?, prenom = ?, date_naissance = ?, adresse = ?, telephone = ?,avatar = ? where cin = ?";

$stmt = $bdd->prepare($sql);
$stmt->bindValue(1,$nom);
$stmt->bindValue(2,$prenom);
$stmt->bindValue(3,$date_naissance);
$stmt->bindValue(4,$adresse);
$stmt->bindValue(5,$telephone);
$stmt->bindValue(6,$avatar);
$stmt->bindValue(7,$cin);
$result=$stmt->execute();
if($result){
    echo "success";
}
?>
