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

$sendEmail = "INSERT INTO 
                    email (emetteur,recepteur,date_envoi,heure_envoi,sujet,message,priorite)
                    VALUES(?,?,?,?,?,?,?)";

    $recepteur = $_POST['email'];
    $getRecepteur = "select * from authentification where username = '$recepteur'";
    $stmtr = $bdd->query($getRecepteur);
    

    if ($stmtr) {
        echo "le recepteur est correct <br>";

        $stmt = $bdd->prepare($sendEmail);
        $stmt->bindValue(1, $emetteur);
        $stmt->bindValue(2, $recepteur);
        $stmt->bindValue(3, date("Y-m-d"));
        $stmt->bindValue(4, date("H:i:s"));
        $stmt->bindValue(5, $sujet);
        $stmt->bindValue(6, $message);
        $stmt->bindValue(7, $priorite);
        $emails = $stmt->execute();
        echo $sendEmail;
    }

