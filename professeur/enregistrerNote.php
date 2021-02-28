<?php
include '../config.php';
$etudiants = $_POST['etudiants'];
$note = $_POST['note'];
$cne = $_SESSION['cne'];
$sql = "select * from professeur where cin = '$cne'";
echo $sql;
$stmt = $bdd->query($sql);
$prof = $stmt->fetchAll();
$sql = "insert into note (professeur,etudiant,note,exam) value(?,?,?,?)";
$exam = date("Y-m-d");
for ($i = 0; $i < count($etudiants); $i++) {
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(1, $prof[0]['id']);
    $stmt->bindValue(2, $etudiants[$i]);
    $stmt->bindValue(3, $note[$i]);
    $stmt->bindValue(4, $exam);
}
