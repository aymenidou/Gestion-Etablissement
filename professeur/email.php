<!-- <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->

<!-- Custom styles for this template -->
<link href="../css/sb-admin-2.min.css" rel="stylesheet">

<!-- Custom styles for this page -->
<!-- <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->

<?php
$sql = "SELECT * FROM email";
if ($_GET["emailtype"] == "recu") {
    $sql = $sql . " where recepteur = ?";
}
if ($_GET["emailtype"] == "envoye") {
    $sql = $sql . " where emetteur = ?";
}

$stmt = $bdd->prepare($sql);

$stmt->bindValue(1, $_SESSION['username']);
$stmt->execute();
$rows = $stmt->fetchAll();
//TODO: 
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
        max-width: 90px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    }

    /* .message {
        max-width: 200px;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
    } */
</style>

<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th></th>
                    <?php
                    if ($_GET["emailtype"] == "recu") {
                        echo "<th>Emetteur</th>";
                    }
                    if ($_GET["emailtype"] == "envoye") {
                        echo "<th>Récepteur</th>";
                    }
                    ?>
                    <th>Sujet</th>
                    <th>Message</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th></th>
                    <?php
                    if ($_GET["emailtype"] == "recu") {
                        echo "<th>Emetteur</th>";
                    }
                    if ($_GET["emailtype"] == "envoye") {
                        echo "<th>Récepteur</th>";
                    }
                    ?>
                    <th>Sujet</th>
                    <th>Message</th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
            <tbody>
                <?php
                for ($i = 0; $i < count($rows); $i++) {
                    // $priorite = "a";
                    switch ($rows[$i]['priorite']) {
                        case "0":
                            $priorite = "";
                            break;
                        case "1":
                            $priorite = "<div class='btn btn-warning btn-circle btn-sm'>
                                <i class='fas fa-exclamation-triangle'></i>
                              </div>";
                            break;
                        case "2":
                            $priorite = "<div class='btn btn-danger btn-circle btn-sm'>
                                <i class='fas fa-info-circle'></i>
                              </div>";
                            break;
                    }
                    echo "<tr class='' >
                        <th style='width: 8px;'>" . $priorite . "</th>";

                    if ($_GET["emailtype"] == "recu") {
                        echo "<th >" . $rows[$i]['emetteur'] . "</th>";
                    }
                    if ($_GET["emailtype"] == "envoye") {
                        echo "<th >" . $rows[$i]['recepteur'] . "</th>";
                    }

                    echo
                    "<th class='ellipsis'>" . $rows[$i]['sujet'] . "</th>
                        <th class='message'>" . $rows[$i]['message'] . "</th>
                        <th class='ellipsis'>" . $rows[$i]['date_envoi'] . "</th>
                        <th style='width: 8px;'><i class='fa text-danger fa-trash' aria-hidden='true'></i></th>
                        </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="addForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <?php include 'formEmail.php'; ?>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<!-- <script src="../vendor/jquery-easing/jquery.easing.min.js"></script> -->

<!-- Custom scripts for all pages-->
<!-- <script src="../js/sb-admin-2.min.js"></script> -->

<!-- Page level plugins -->
<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="../js/demo/datatables-demo.js"></script>