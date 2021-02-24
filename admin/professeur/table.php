<!-- <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

<!-- Custom styles for this template -->
<!-- <link href="../../css/sb-admin-2.min.css" rel="stylesheet"> -->

<!-- Custom styles for this page -->
<!-- <link href="../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->

<?php
if ($table == 'Administration') {
    $sql = "SELECT * from $table ";
} else if ($table == 'Professeur') {
    $sql = "SELECT p.id, p.nom,p.prenom,p.genre,p.date_naissance,p.adresse,p.contrat,p.salaire,p.date_embauche,p.telephone,p.cin,m.nom as matiere FROM professeur as p inner join matiere as m where m.id = p.matiere";
}
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
    <button class="btn btn-danger btn-icon-split align-self-end">
        <span class="icon "><i class="fa fa-print" aria-hidden="true"></i></span>
        <span class="text">Imprimer</span>
    </button>
</div>
<style>
    .ellipsis {
    max-width: 40px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
}
</style>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>CIN</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Genre</th>
                    <th>Date naissance</th>
                    <th>Adresse</th>
                    <th>Contrat</th>
                    <th>Salaire</th>
                    <?php if ($table == 'Professeur') {
                        echo "<th>Matiere</th>";
                    } ?>
                    <th>Date d'embauche</th>
                    <th>Téléphone</th>
                    <th></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>CIN</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Genre</th>
                    <th>Date naissance</th>
                    <th>Adresse</th>
                    <th>Contrat</th>
                    <th>Salaire</th>
                    <?php if ($table == 'Professeur') {
                        echo "<th>Matiere</th>";
                    } ?>
                    <th>Date d'embauche</th>
                    <th>Téléphone</th>
                    <th></th>

                </tr>
            </tfoot>
            <tbody>
                <?php
                for ($i = 0; $i < count($rows); $i++) {
                    echo
                    "<tr>
                        <th>" . $rows[$i]['cin'] . "</th>
                        <th>" . $rows[$i]['nom'] . "</th>
                        <th>" . $rows[$i]['prenom'] . "</th>
                        <th>" . $rows[$i]['genre'] . "</th>
                        <th>" . $rows[$i]['date_naissance'] . "</th>
                        <th class='ellipsis'>" . $rows[$i]['adresse'] . "</th>
                        <th>" . $rows[$i]['contrat'] . "</th>
                        <th>" . $rows[$i]['salaire'] . "</th>";
                    if ($table == 'Professeur') {
                        echo "<th>" . $rows[$i]['matiere'] . "</th>";
                    }
                    echo "<th>" . $rows[$i]['date_embauche'] . "</th>
                        <th>" . $rows[$i]['telephone'] . "</th>
                        <th> <a href='../delete.php?id_pro=" . $rows[$i]['id'] . "'><i class='text-danger fa fa-trash' aria-hidden='true'></i></a></th>
                    </tr> ";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include 'professeur/form.php'; ?>
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