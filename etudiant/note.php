<link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<?php

$cne =$_SESSION['cne'];
$sql = "SELECT
n.note,
n.id,
m.nom matiere,
n.exam
from note n
inner join etudiants e
inner join professeur p 
inner join matiere m 
where e.id = n.etudiant and e.cne ='$cne' and p.id = n.professeur and p.matiere = m.id";

$stmt = $bdd->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();



?>
<div class="card-header py-3 justify-content-end d-flex align-items-end ">


</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered"  width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Matiere</th>
                    <th>Exam</th>
                    <th>Note</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                <th>ID</th>
                    <th>Matiere</th>
                    <th>Exam</th>
                    <th>Note</th>

                </tr>
            </tfoot>
            <tbody>
                <?php
                for ($i = 0; $i < count($rows); $i++) {
                    echo
                    "<tr>
                        <th>" . $rows[$i]['id'] . "</th>
                        <th>" . $rows[$i]['matiere'] . "</th>
                        <th>" . $rows[$i]['exam'] . "</th>
                        <th>" . $rows[$i]['note'] . "</th>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    
</div>






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