<?php 
include '../../config.php';
$matiere = $_POST['matiere'];
$jour = $_POST['jour'];
$heure_d = $_POST['heure_d'];
$duree = $_POST['duree'];
$groupe = $_POST['groupe'];

$sql = "insert into seance (matiere,groupe,jour,heure_d,duree) values ('$matiere','$groupe','$jour','$heure_d','$duree')";
$stmt = $bdd->query($sql);

echo
"<script>window.location.href='../administration.php?display=Seances&groupe=$groupe'</script>";
?>