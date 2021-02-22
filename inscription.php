<?php
include 'config.php';

// $sql = "select * from names";
// $stmt = $bdd->query($sql);
// $rows = $stmt->fetchAll();

// var_dump($rows);
echo "<br>nom : ";
$nom = $_POST["nom"];
echo "<br>prenom : ";
$prenom = $_POST["prenom"];
echo "<br>genre : ";
$g = $_POST["genre"];
echo "<br>date_naissance : ";
$dn = $_POST["date_naissance"];
echo "<br>adresse : ";
$add = $_POST["adresse"];
echo "<br>date_inscription : ";
$di = $_POST["date_inscription"];
echo "<br>cne : ";
$cne = $_POST["cne"];
echo "<br>niveau_scolaire : ";
$ns = $_POST["niveau_scolaire"];
echo "<br>filiere : ";
$f = $_POST["filiere"];

$sql = "insert into etudiants (nom,prenom,genre,date_naissance,adresse,date_inscription,cne,niveau_scolaire)
 values (?,?,?,?,?,?,?,?) ";

$stmt = $bdd->prepare($sql);
$stmt->bindValue(1,$nom);
$stmt->bindValue(2,$prenom);
$stmt->bindValue(3,$g);
$stmt->bindValue(4,$dn);
$stmt->bindValue(5,$add);
$stmt->bindValue(6,$di);
$stmt->bindValue(7,$cne);
$stmt->bindValue(8,$ns);
$stmt->execute();




?>
<table>
    <tr>
        <td></td>
        <td></td>
    </tr>


</table>