<?php
$prof = $_POST['prof'];
$mat = $_POST['mat'];
$groupe = $_POST['groupe'];
include_once '../../config.php';
for($i = 0;$i<count($mat);$i++){

    $sql = "insert into prof_groupe (professeur,matiere,groupe) values(?,?,?)  ON DUPLICATE KEY UPDATE professeur=?";
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(1,$prof[$i]);
    $stmt->bindValue(2,$mat[$i]);
    $stmt->bindValue(3,$groupe);
    $stmt->bindValue(4,$prof[$i]);
    $stmt->execute();
}