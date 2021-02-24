<?php //Query 
include '../../config.php';
$nom = $_POST['nom'];
$description = $_POST['description'];

//INSERT 
$query = " INSERT INTO filiere ( nom, description )  VALUES ( '$nom', '$description' ) ";
$result = $bdd->query($query);

if ($result) {
	echo "<script>window.location.href='../administration.php?display=Filiere'</script>";
} else {
	echo 'Query Failed';
}
