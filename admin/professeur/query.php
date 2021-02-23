<?php //Query 
include '../../config.php';
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$genre = $_POST['genre'];
$date_naissance = $_POST['date_naissance'];
$adresse = $_POST['adresse'];
$cin = $_POST['cin'];
$contrat = $_POST['contrat'];
$salaire = $_POST['salaire'];
$date_dembauche = $_POST['date_dembauche'];
$telephone = $_POST['telephone'];

if ($_POST['genre'] == "m") {
	$avatar = "https://avataaars.io/?avatarStyle=Circle&topType=ShortHairShortFlat&accessoriesType=Blank&hairColor=Black&facialHairType=Blank&clotheType=BlazerShirt&eyeType=Default&eyebrowType=Default&mouthType=Default&skinColor=Light";
}
if ($_POST['genre'] == "f") {
	$avatar = "https://avataaars.io/?avatarStyle=Circle";
}

// $query ='';
if (isset($_POST['matiere'])) {
	$matiere = $_POST['matiere'];
	$query = " insert into professeur ( nom, prenom, genre, date_naissance, adresse, cin, contrat, salaire, date_embauche, telephone, matiere ,avatar)  values ( '$nom', '$prenom', '$genre', '$date_naissance', '$adresse', '$cin', '$contrat', '$salaire', '$date_dembauche', '$telephone', '$matiere' ,'$avatar') ";
	$username = " insert into authentification (username,password,type,cne) values ('" . $cin . "@school.ma','$cin','professeur','$cin')";
} else {
	$query = " INSERT INTO administration ( nom, prenom, genre, date_naissance, adresse, cin, contrat, salaire, date_embauche, telephone,avatar )  VALUES ( '$nom', '$prenom', '$genre', '$date_naissance', '$adresse', '$cin', '$contrat', '$salaire', '$date_dembauche', '$telephone','$avatar' ) ";
	$username = " insert into authentification (username,password,type,cne) values ('" . $cin . "@school.ma','$cin','admin','$cin')";
}
//INSERT 
$result = $bdd->query($query);
$result2 = $bdd->query($username);
if($result){

	if (isset($_POST['matiere'])) {
		echo "<script>window.location.href='../administration.php?display=Professeur'</script>";
	} else {
		echo "<script>window.location.href='../administration.php?display=Administration'</script>";
	}
}


//  echo $query;
//  echo $username;
//  if( $result )
//  {
//  	echo 'Success';
//  }
//  else
//  {
//  	echo 'Query Failed';
//  }
//  if( $result2 )
//  {
//  	echo 'Success';
//  }
//  else
//  {
//  	echo 'Query Failed';
//  }
