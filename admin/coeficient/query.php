<?php //Query 
$filiere = $_POST['filiere'];  
$matiere = $_POST['matiere'];  

 //INSERT 
 $query = " INSERT INTO coeficient ( filiere, matiere )  VALUES ( '$filiere', '$matiere' ) "; 
 $result = mysql_query($query); 

 if( $result )
 {
 	echo 'Success';
 }
 else
 {
 	echo 'Query Failed';
 }

?>