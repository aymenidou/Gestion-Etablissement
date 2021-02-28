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
// if ($_POST['type'] == "individu") {
    $recepteur = $_POST['email'];
    $getRecepteur = "select * from authentification where username = '$recepteur'";
    $stmtr = $bdd->query($getRecepteur);
    // $stmtr = $bdd->prepare($getRecepteur);
    // $stmtr->bindValue(1, $email);
    // $stmtr->execute();
    // $rows = $stmtr->fetchAll();

    if ($stmtr) {
        echo "le recepteur est correct <br>";

        // $emails = $bdd->query($sendEmail);
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
// }
// if ($_POST['type'] == "groupe") {
//     $idgroupe = $_POST['groupe'];


//     $getlist = "select a.username from groupe g inner join etudiants e inner join authentification a where g.id = $idgroupe and e.cne = a.cne";
//     $stmtg = $bdd->query($getlist);
//     $emailg = $stmtg->fetchAll();
//     // var_dump($emails[0]);
//     // $stmtr = $bdd->prepare($getRecepteur);
//     // $stmtr->bindValue(1, $email);
//     // $stmtr->execute();
//     // $rows = $stmtr->fetchAll();

//     if (count($emailg) > 0) {
//         for ($i = 0; $i < count($emailg); $i++) {
//             echo "le recepteur est correct <br>";

//             $recepteur = $emailg[$i]['username'];
//             $date_envoi =  date("Y-m-d");

//             $stmt = $bdd->prepare($sendEmail);
//             $stmt->bindValue(1, $emetteur);
//             $stmt->bindValue(2, $recepteur);
//             $stmt->bindValue(3, date("Y-m-d"));
//             $stmt->bindValue(4, date("H:i:s"));
//             $stmt->bindValue(5, $sujet);
//             $stmt->bindValue(6, $message);
//             $stmt->bindValue(7, $priorite);
//             $emails = $stmt->execute();
//             echo $sendEmail . "<br>";
//         }
//     }
// }
