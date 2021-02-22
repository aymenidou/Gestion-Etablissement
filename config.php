<?php 
$dsn = "mysql:host=localhost;dbname=etablissement_scolaire";
$login = "root";
$pass = "";
try {
    $bdd = new PDO($dsn, $login, $pass);
} catch (PDOException $e) {
    die('Connexion impossible :' . $e->getMessage());
}
