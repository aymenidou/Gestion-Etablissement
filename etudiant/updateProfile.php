<?php 
include '../config.php';
$cin =$_POST['cne'];
$nom =$_POST['nom'];
$prenom =$_POST['prenom'];
$date_naissance =$_POST['date_naissance'];
$adresse =$_POST['adresse'];
$avatar =$_POST['avatar'];

$sql = "UPDATE etudiants SET nom = ?, prenom = ?, date_naissance = ?, adresse = ?,avatar = ? where cne = ?";

$stmt = $bdd->prepare($sql);
$stmt->bindValue(1,$nom);
$stmt->bindValue(2,$prenom);
$stmt->bindValue(3,$date_naissance);
$stmt->bindValue(4,$adresse);
$stmt->bindValue(5,$avatar);
$stmt->bindValue(6,$cin);
$result=$stmt->execute();
if($result){
    echo "<script>
    window.location.href='dashboard.php'</script>";
}
?>
