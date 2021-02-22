<?php //Query 
include '../connexion.php';
include 'params.php';
 //INSERT 
 $query = " INSERT INTO salle ( nom, description )  VALUES ( '$nom', '$description' ) "; 
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