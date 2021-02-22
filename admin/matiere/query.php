<?php //Query 
include 'params.php';
include '../connexion.php';
 //INSERT 
 $query = " INSERT INTO matiere ( matiere, description )  VALUES ( '$matiere', '$description' ) "; 
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