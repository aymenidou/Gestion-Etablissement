<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = 'select * from authentification where username = ? and password = ?';

if ($username && $password) {
    $stmt = $bdd->prepare($sql);
    $stmt->bindValue(1, $username); //cin@school.ma cne
    $stmt->bindValue(2, $password); //cin
    $stmt->execute();
    $rows = $stmt->fetchAll();
    if ($rows) {
        $row = $rows[0];
        session_start();

        $_SESSION['cne'] = $row['cne'];
        $_SESSION['username'] = $row['username'];
        
        switch ($row["type"]) {
            case "admin":
                echo "<script>window.location.href='admin/choices.php'</script>";
                break;
            case "professeur":
                $_SESSION['type'] = "professeur";
                echo "<script>window.location.href='professeur/dashboard.php?display=email'</script>";
                break;
            case "etudiant":
                $_SESSION['type'] = "etudiant";
                echo "<script>window.location.href='etudiant/dashboard.php'</script>";
                break;
            default:
                header('location:dashboard.php', false);
        };
    }
     else {
        header('location:login.html?error=1');
        echo "<script>window.location.href='index.php?error=1'</script>";
                
    }
}
