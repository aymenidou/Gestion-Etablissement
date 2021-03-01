<?php
include '../config.php';
session_start();
$nom = '';
$prenom = '';
if (isset($_SESSION['cne'])) {
  $cne = $_SESSION['cne'];
  $sql = "select * from etudiants where cne = ?";
  $stmt = $bdd->prepare($sql);
  $stmt->bindValue(1, $cne);
  $stmt->execute();
  $row = $stmt->fetchAll();
  $nom = $_SESSION['nom'] = $row[0]['nom'];
  $prenom = $_SESSION['prenom'] = $row[0]['prenom'];
  $image_profil = $_SESSION['avatar'] = $row[0]['avatar'];
}
$pageHeader = "Accueil";
if (isset($_GET["display"])) {
  switch ($_GET["display"]) {
    case 'email':
      if ($_GET["emailtype"] == "recu") {
        $pageHeader = "Email Reçu";
      }
      if ($_GET["emailtype"] == "envoye") {
        $pageHeader =  "Email Envoyé";
      }
      break;
    case 'parametres':
      $pageHeader =  "Paramètres";
      break;
    case 'note':
      $pageHeader =  "Mes Notes";
      break;
  }
}
// var_dump($row[0]) 
?>

<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon ">
          <i class="fas fa-school"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Nom Ecole</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php?display=accueil">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Accueil</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Profile
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-user"></i>
          <span>Mon profile</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <!-- <h6 class="collapse-header">Custom Components:</h6> -->
            <a class="collapse-item" href="dashboard.php?display=parametres"><i class="fas fa-fw fa-cog"></i> Paramètres</a>
            <a class="collapse-item" href="dashboard.php?display=note"><i class="fas fa-fw fa-clipboard"></i> Notes</a>
            <!-- <a class="collapse-item" href="cards.html">Cards</a> -->
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-envelope"></i>
          <span>Mes emails</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="dashboard.php?display=email&emailtype=recu"><i class="fas fa-inbox"></i> Reçu</a>
            <a class="collapse-item" href="dashboard.php?display=email&emailtype=envoye"><i class="fas fa-paper-plane"></i> Envoyé</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <!-- <hr class="sidebar-divider"> -->





      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">








            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  <?php print($nom . "<br>" . $prenom) ?>
                </span>
                <img class="img-profile rounded-circle" src="<?php echo $image_profil; ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  <?php echo $nom . " " . $prenom ?>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="?display=accueil">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="?display=parametres">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Parametres
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Déconnexion
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $pageHeader ?></h1>
            <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
          </div>


          <div class="card shadow mb-4">
            <?php
            if (isset($_GET['display'])) {

              switch ($_GET['display']) {
                case 'email':
                  include 'email.php';
                  break;
                case 'parametres':
                  include 'parametres.php';
                  break;
                case 'groupe':
                  include 'groupe.php';
                  break;
                case 'accueil':
                  include 'accueil.php';
                  break;
                case 'note':
                  include 'note.php';
                  break;
              }
            } else {
              echo "<script>
              window.location.href = '?display=accueil'
            </script>";
            }

            ?>
          </div>




        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Gestion Ecole</span>
          </div>
        </div>
      </footer> -->
      <!-- End of Footer -->



    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLabel">Prêt à partir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          Selectionnez "Déconnexion" ci-dessous si vous êtes prêt à mettre fin à votre session en cours.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="reset" data-dismiss="modal">Annuler</button>
          <a class="btn btn-primary" href="logout.php">Déconnexion</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <!-- <script src="../vendor/jquery/jquery.min.js"></script> -->
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>


</body>

</html>