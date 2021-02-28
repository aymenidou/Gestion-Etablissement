<link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<!-- <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->

<?php
if(isset($_GET['groupe'])){
    $idgroupe=$_GET['groupe'];
}else{
    echo "<script>
    window.location.href = '?display=Classes'
  </script>";
}

$sql = "SELECT
s.jour,
s.heure_d,
s.duree,
m.nom matiere,
g.salle,
g.nom groupe,
f.nom filiere
FROM
seance AS s
INNER JOIN groupe AS g
INNER JOIN matiere AS m
INNER JOIN filiere AS f
WHERE
s.groupe = g.id AND s.matiere = m.id AND f.id = g.filiere and g.id = ' $idgroupe' order by s.heure_d";
$stmt = $bdd->prepare($sql);
$stmt->execute();
$rows = $stmt->fetchAll();

$jour = array(
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi"
);
$heure = array(
    "08:00",
    "09:00",
    "10:00",
    "11:00",
    "14:00",
    "15:00",
    "16:00",
    "17:00"

);

?>
<div class="card-header py-3 justify-content-end d-flex align-items-end ">

    <a href="#" data-toggle="modal" data-target="#addForm">
        <button class="btn btn-primary btn-icon-split align-self-end ">
            <span class="icon "><i class="fa fa-plus" aria-hidden="true"></i></span>
            <span class="text">Ajouter</span>
        </button>
    </a>
    <button class="btn btn-danger btn-icon-split align-self-end">
        <span class="icon "><i class="fa fa-print" aria-hidden="true"></i></span>
        <span class="text">Imprimer</span>
    </button>
</div>
<div class="card-body">
    <div class="table-responsive">
        <?php echo 'Filiere : ' . $rows[0]['filiere'] . ' - Salle : ' . $rows[0]['salle']; ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th></th>
                    <th>08:00 > 09:00</th>
                    <th>09:00 > 10:00</th>
                    <th>10:00 > 11:00</th>
                    <th>11:00 > 12:00</th>
                    <th>14:00 > 15:00</th>
                    <th>15:00 > 16:00</th>
                    <th>16:00 > 17:00</th>
                    <th>17:00 > 18:00</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th></th>
                    <th>08:00 > 09:00</th>
                    <th>09:00 > 10:00</th>
                    <th>10:00 > 11:00</th>
                    <th>11:00 > 12:00</th>
                    <th>14:00 > 15:00</th>
                    <th>15:00 > 16:00</th>
                    <th>16:00 > 17:00</th>
                    <th>17:00 > 18:00</th>

                </tr>
            </tfoot>
            <tbody>
                <?php
                for ($i = 0; $i < count($jour); $i++) {
                    echo
                    "<tr>
                        <th>" . $jour[$i] . "</th>";

                    for ($j = 0; $j < count($heure); $j++) {
                        $seance = "<th>";
                        for ($k = 0; $k < count($rows); $k++) {

                            if ($rows[$k]['jour'] == $jour[$i] && $rows[$k]['heure_d']  == $heure[$j]) {
                                if ($rows[$k]['duree'] == 2) {
                                    $seance = $seance . $rows[$k]['matiere'] . '</th><th>';
                                    $j++;
                                }
                                $seance = $seance.$rows[$k]['matiere'];
                            }
                        }
                        echo "$seance</th>";
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include 'seance/form.php'; ?>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../../vendor/jquery/jquery.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../../js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<!-- <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="../../js/demo/datatables-demo.js"></script> -->