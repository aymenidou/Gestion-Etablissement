<?php //Query 
$matiere = $_POST['nom'];  
$description = $_POST['description'];  
include '../../config.php';
 //INSERT 
 $query = " INSERT INTO matiere ( nom, description )  VALUES ( '$matiere', '$description' ) "; 
 $result = $bdd->query($query); 

 if( $result )
 {
	 echo 'Success';
	 echo "<script>window.location.href='../administration.php?display=Filiere'</script>";

 }
 else
 {
 	echo 'Query Failed';
 }

?>