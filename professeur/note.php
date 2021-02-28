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
    $sql = $sql . " AND e.groupe = " . $idgroupe;
}
$stmt = $bdd->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();



?>
<div class="card-header py-3 justify-content-end d-flex align-items-end ">


</div>
<form id="form1" name="form1" method="post" action="enregistrerNote.php" class="align-text-center card p-2">
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered"  width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>CNE</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Genre</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>CNE</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Genre</th>
                    <th>Note</th>

                </tr>
            </tfoot>
            <tbody>
                <?php
                for ($i = 0; $i < count($rows); $i++) {
                    echo
                    "<tr>
                        <th><input type='text' class='form-control' name='etudiants[]' hidden value='" . $rows[$i]['id'] . "'/>" . $rows[$i]['id'] . "</th>
                        <th>" . $rows[$i]['cne'] . "</th>
                        <th>" . $rows[$i]['nom'] . "</th>
                        <th>" . $rows[$i]['prenom'] . "</th>";
                    if ($rows[$i]['genre'] == "m") {

                        echo "<th>masculin</th>";
                    }
                    if ($rows[$i]['genre'] == "f") {

                        echo "<th>féminin</th>";
                    }
                    echo " <th><input type='number' class='form-control' name='note[]' value='0'/></th>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="align-content-end d-inline-flex">
                <button type="submit" name="envoyer" id="envoyer" value="Envoyer" class="w-50 btn btn-primary m-2">Envoyer</button>
                <button type="reset" name="annuler" id="annuler" value="Annuler" class="w-50 btn btn-secondary m-2">Annuler</button>
            </div>
</div>

</form>




<!-- Bootstrap core JavaScript-->
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../../js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<!-- <script src="../../vendor/datatables/jquery.dataTables.min.js"></script> -->
<!-- <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="../../js/demo/datatables-demo.js"></script> -->