<?php //Query 
$filiere = $_POST['filiere'];  
$matiere = $_POST['matiere'];  
$coef=$_POST['coef'];
 //INSERT  
 $query_update="INSERT INTO coeficient (filiere, matiere, coef) VALUES ('$filiere', '$matiere','$coef')
 ON DUPLICATE KEY UPDATE coef='$coef'";
 $result = $bdd->query($query_update); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

?>