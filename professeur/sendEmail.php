<?php
include_once '../config.php';
session_start();
$sql = "select * from authentification where cne = ?";
$stmt = $bdd->prepare($sql);
$stmt->bindValue(1, $_SESSION['cne']);
$stmt->execute();
$rowsEmetteur = $stmt->fetchAll();
$emetteur = $rowsEmetteur[0]['username'];

$priorite = $_POST['priorite'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

if ($_POST['type'] == "individu") {
    $recepteur = $_POST['email'];
    $getRecepteur = "select * from authentification where username = '$recepteur'";
    $stmtr = $bdd->query($getRecepteur);
    // $stmtr = $bdd->prepare($getRecepteur);
    // $stmtr->bindValue(1, $email);
    // $stmtr->execute();
    // $rows = $stmtr->fetchAll();

    if ($stmtr) {
        echo "le recepteur est correct <br>";
        $sendEmail = "INSERT INTO 
                    email (emetteur,recepteur,date_envoi,sujet,message,priorite)
                    VALUES(?,?,?,?,?,?)";
        // $emails = $bdd->query($sendEmail);
        $stmt = $bdd->prepare($sendEmail);
        $stmt->bindValue(1, $emetteur);
        $stmt->bindValue(2, $recepteur);
        $stmt->bindValue(3, date("Y-m-d"));
        $stmt->bindValue(4, $sujet);
        $stmt->bindValue(5, $message);
        $stmt->bindValue(6, $priorite);
        $emails = $stmt->execute();
        echo $sendEmail;
        
    }
}
if ($_POST['type'] == "groupe") {
    $idgroupe = $_POST['groupe'];
}
