<?php //Query 
include '../../config.php';
$nom = $_POST['nom'];
$description = $_POST['description'];
$niveau = $_POST['niveau'];

//INSERT 
$query = " INSERT INTO filiere ( nom, description,niveau )  VALUES ( '$nom', '$description','$niveau' ) ";
$result = $bdd->query($query);

if ($result) {
	echo "<script>window.location.href='../administration.php?display=Filiere'</script>";
} else {
	echo 'Query Failed';
}
