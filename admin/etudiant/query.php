<?php //Query 
$cne = $_POST['cne'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$genre = $_POST['genre'];
$date_naissance = $_POST['date_naissance'];
$adresse = $_POST['adresse'];
$date_inscription = $_POST['date_inscription'];
$groupe = $_POST['groupe'];
$niveau = $_POST['niveau'];
include_once '../../config.php';
if ($_POST['genre'] == "m") {
	$avatar = "https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light";
}
if ($_POST['genre'] == "f") {
	$avatar = "https://avataaars.io/?avatarStyle=Circle";
}

//INSERT 
$query = " INSERT INTO etudiants (cne, nom, prenom, genre, date_naissance, adresse,date_inscription, groupe,niveau_scolaire,avatar ) 
  VALUES ( '$cne','$nom', '$prenom', '$genre', '$date_naissance', '$adresse','$date_inscription', '$groupe','$niveau','$avatar' ) ";
$username = " insert into authentification (username,password,type,cne) values ('" . $cne . "@school.ma','$cne','etudiant','$cne')";
echo $query . '<br>';
// echo $username;
$result1 = $bdd->query($query);
// $result2 = $bdd->query($username);

if ($result1) {


	echo "<script>window.location.href='../administration.php?display=Etudiants'</script>";

}
