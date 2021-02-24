<?php //Query 
include '../../config.php';
// include 'params.php';
 $nom =$_POST['nom'];
 $filiere=$_POST['filiere'];
 $salle=$_POST['salle'];
 //INSERT 
 $query = " INSERT INTO groupe ( nom, filiere, salle )  VALUES ( '$nom', '$filiere', '$salle' ) "; 
 $result = $bdd->query($query); 

 if( $result )
 {
	echo "<script>window.location.href='../administration.php?display=Classes'</script>";
	
 }
 else
 {
 	echo 'Query Failed';
 }

?>