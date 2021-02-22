<?php //Query 
include '../connexion.php';
include 'params.php';
echo $nom."<br>";
echo $filiere."<br>";
echo $salle."<br>";
 //INSERT 
 $query = " INSERT INTO groupe ( nom, filiere, salle )  VALUES ( '$nom', '$filiere', '$salle' ) "; 
 $result = $bdd->query($query); 

 if( $result )
 {
	 echo 'Success';
	 header('location:form.php');
 }
 else
 {
 	echo 'Query Failed';
 }

?>