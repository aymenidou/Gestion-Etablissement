<link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?php
$sql = "SELECT
e.id,
e.nom,
e.prenom,
e.genre,
e.date_naissance,
e.adresse,
e.date_inscription,
e.cne,
g.nom as groupe
FROM
etudiants e
INNER JOIN groupe g
 WHERE g.id = e.groupe";
if (isset($_GET['groupe'])) {
    $idgroupe = $_GET['groupe'];
    // echo "idgroupe ". $idgroupe;
    $sql = $sql . " AND e.groupe = " . $idgroupe;
}
$stmt = $bdd->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();



?>
<div class="card-header py-3 justify-content-end d-flex align-items-end ">

    <?php
    if (isset($_GET['groupe'])) {
        echo    ' <a href="#" data-toggle="modal" data-target="#addFormPG">
    <button class="btn btn-success btn-icon-split align-self-end ">
        <span class="icon "><i class="fa fa-plus" aria-hidden="true"></i></span>
        <span class="text">Professeur</span>
    </button>
    </a>';
    }
    ?>
    <a href="#" data-toggle="modal" data-target="#addForm">
        <button class="btn btn-primary btn-icon-split align-self-end ">
            <span class="icon "><i class="fa fa-plus" aria-hidden="true"></i></span>
            <span class="text">Etudiant</span>
        </button>
    </a>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CNE</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Genre</th>
                    <th>Date naissance</th>
                    <th>Date inscription</th>
                    <th>Adresse</th>
                    <th>Groupe</th>
                    <th></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>CNE</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Genre</th>
                    <th>Date naissance</th>
                    <th>Date inscription</th>
                    <th>Adresse</th>
                    <th>Groupe</th>
                    <th></th>

                </tr>
            </tfoot>
            <tbody>
                <?php
                for ($i = 0; $i < count($rows); $i++) {
                    echo
                    "<tr>
                        <th>" . $rows[$i]['id'] . "</th>
                        <th>" . $rows[$i]['cne'] . "</th>
                        <th>" . $rows[$i]['nom'] . "</th>
                        <th>" . $rows[$i]['prenom'] . "</th>";
                    if ($rows[$i]['genre'] == "m") {

                        echo "<th>masculin</th>";
                    }
                    if ($rows[$i]['genre'] == "f") {

                        echo "<th>féminin</th>";
                    }
                    echo " <th>" . $rows[$i]['date_naissance'] . "</th>
                        <th>" . $rows[$i]['date_inscription'] . "</th>
                        <th>" . $rows[$i]['adresse'] . "</th>
                        <th>" . $rows[$i]['groupe'] . "</th>
                        <th><a href='../delete.php?id_e=" . $rows[$i]['id'] . "'><i class='fa text-danger fa-trash' aria-hidden='true'></i></a></th>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include 'etudiant/form.php'; ?>
</div>


<?php
if (isset($_GET['groupe'])) {

    echo '<div class="modal fade" id="addFormPG" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">';
    include "p_g/form.php";
    echo '</div>';
}
?>

<!-- Bootstrap core JavaScript-->
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../../js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../../js/demo/datatables-demo.js"></script>