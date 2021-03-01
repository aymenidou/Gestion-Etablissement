<link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?php
$sql = "SELECT
    g.id,
    g.nom groupe,
    f.nom filiere,
    s.nom salle
    
FROM
    groupe AS g
INNER JOIN filiere AS f
INNER JOIN salle as s
WHERE
    f.id = g.filiere and g.salle = s.id";
$stmt = $bdd->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();


?>
<div class="card-header py-3 justify-content-end d-flex align-items-end ">

    <a href="#" data-toggle="modal" data-target="#addForm">
        <button class="btn btn-primary btn-icon-split align-self-end ">
            <span class="icon "><i class="fa fa-plus" aria-hidden="true"></i></span>
            <span class="text">Ajouter</span>
        </button>
    </a>
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
                        <th class='text-center'><a href='administration.php?display=Etudiants&groupe=" . $rows[$i]['id'] . "'><i class='fa text-danger fa-pen' aria-hidden='true'></i></a></th>
                        <th class='text-center'><a href='administration.php?display=Seances&groupe=" . $rows[$i]['id'] . "'><i class='fa text-danger fa-pen' aria-hidden='true'></i></a></th>
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