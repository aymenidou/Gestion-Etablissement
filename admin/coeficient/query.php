<?php //Query 
$filiere = $_POST['filiere'];  
$matiere = $_POST['matiere'];  
$coef=$_POST['coef'];
 //INSERT 
 $query = " INSERT INTO coeficient ( filiere, matiere, coef )  VALUES ( '$filiere', '$matiere','$coef' ) "; 
 $result = $bdd->query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

?>