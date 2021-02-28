<link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?php
$sql = 'SELECT
g.id,
g.nom groupe,
f.nom filiere,
s.nom salle
FROM
prof_groupe AS pg
INNER JOIN groupe AS g
INNER JOIN professeur AS p
INNER JOIN filiere f INNER JOIN salle s WHERE
p.cin = "'.$_SESSION["cne"].'" AND p.id = pg.professeur AND p.matiere = pg.matiere AND g.id = pg.groupe AND f.id = g.filiere AND s.id = g.salle';
$stmt = $bdd->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();
echo $sql;

?>
<div class="card-header py-3 justify-content-end d-flex align-items-end ">

    
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Filiere</th>
                    <th>Salle</th>
                    <th>Etudiants</th>
                    <th>Séances</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Filiere</th>
                    <th>Salle</th>
                    <th>Etudiants</th>
                    <th>Séances</th>

                </tr>
            </tfoot>

            <tbody>
                <?php
                for ($i = 0; $i < count($rows); $i++) {
                    echo
                    "<tr>
                        <th>" . $rows[$i]['id'] . "</th>
                        <th>  " . $rows[$i]['groupe'] . " </a></th>
                        <th>" . $rows[$i]['filiere'] . "</th>
                        <th>" . $rows[$i]['salle'] . "</th>
                        <th class='text-center'><a href='dashboard.php?display=Etudiants&groupe=" . $rows[$i]['id'] . "'><i class='fa text-danger fa-pen' aria-hidden='true'></i></a></th>
                        <th class='text-center'><a href='dashboard.php?display=Seances&groupe=" . $rows[$i]['id'] . "'><i class='fa text-danger fa-pen' aria-hidden='true'></i></a></th>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include 'groupe/form.php'; ?>
</div>

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