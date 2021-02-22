<?php
$dsn = "mysql:host=localhost;dbname=etablissement_scolaire";
$login = "root";
$pass = "";
try {
    $bdd = new PDO($dsn, $login, $pass);
} catch (PDOException $e) {
    die('Connexion impossible :' . $e->getMessage());
}


//l'ajout des prenom Masculin au base de données
// for ($i = 0; $i < count($nom); $i++) {
//     $sql = " insert into nom (nom) values (?)";
//     $stmt = $bdd->prepare($sql);
//     $stmt->bindValue(1, $nom[$i]);
//     $stmt->execute();
//     echo "<br> $i nom added";
// }
//l'ajout des prenom Féminin au base de données
// for ($i = 0; $i < count($prenom); $i++) {
//     $sql = "insert into prenom (prenom,genre) values (?,?)";
//     $stmt = $bdd->prepare($sql);
//     $stmt->bindValue(1, $prenom[$i]);
//     $stmt->bindValue(2, "f");
//     $stmt->execute();
//     echo "<br> $i pronom added";
// }
//l'ajout des adresse au base de données
// for ($i = 0; $i < count($adresse); $i++) {
//     $sql = "insert into adresse (adresse) values (?)";
//     $stmt = $bdd->prepare($sql);
//     $stmt->bindValue(1, $adresse[$i]);
//     $stmt->execute();
//     echo "<br>".($i+1)." adresse added";
// }

// for ($i = 0; $i < count($matiere); $i++) {
//     $sql = "insert into matiere (nom) values (?)";
//     $stmt = $bdd->prepare($sql);
//     $stmt->bindValue(1, $matiere[$i]);
//     $stmt->execute();
//     echo "<br>".($i+1)." matiere added";
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            display: inline-block;
            border: 2px solid black;
        }

        th {
            background-color: greenyellow;
        }
    </style>
</head>

<body>
    <?php
    $sql = "select * from nom";
    $stmt = $bdd->query($sql);
    $rows = $stmt->fetchAll();
    ?>
    <div>
        <h2>liste des noms</h2>
        <table border>
            <tr>
                <th>Nom</th>
            </tr>
            <?php
            if ($rows) {
                // var_dump($rows);
                for ($i = 0; $i < count($rows); $i++) {
                    echo "<tr>";
                    echo "<td>" . $rows[$i]["nom"] . "</td>";
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </div>
    <?php
    $sqlm = "select * from prenom where genre ='m'";
    $stmtm = $bdd->query($sqlm);
    $rowsm = $stmtm->fetchAll();

    ?>
    <div>
        <h2>liste des prenom Masculin</h2>
        <table border>
            <tr>
                <th>Prenom</th>
            </tr>

            <?php
            if ($rowsm) {
                // var_dump($rows);
                for ($i = 0; $i < count($rowsm); $i++) {
                    echo "<tr>";
                    echo "<td>" . $rowsm[$i]["prenom"] . "</td>";
                    echo "</tr>";
                }
            }
            ?>

        </table>
    </div>
    <?php
    $sqlf = "select * from prenom where genre ='f'";
    $stmtf = $bdd->query($sqlf);
    $rowsf = $stmtf->fetchAll();

    ?>
    <div>
        <h2>liste des prenom Feminin</h2>
        <table border>
            <tr>
                <th>Prenom</th>
            </tr>

            <?php
            if ($rowsf) {
                // var_dump($rows);
                for ($i = 0; $i < count($rowsf); $i++) {
                    echo "<tr>";
                    echo "<td>" . $rowsf[$i]["prenom"] . "</td>";
                    echo "</tr>";
                }
            }
            ?>

        </table>
    </div>

</body>

</html>