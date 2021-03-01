<!DOCTYPE html>
<html lang="en">
<?php
include '../config.php';
session_start();
$nom = '';
$prenom = '';
if (isset($_SESSION['cne'])) {
  $cne = $_SESSION['cne'];
  $sql = "select * from administration where cin = ?";
  $stmt = $bdd->prepare($sql);
  $stmt->bindValue(1, $cne);
  $stmt->execute();
  $row = $stmt->fetchAll();
  $nom = $_SESSION['nom'] = $row[0]['nom'];
  $prenom = $_SESSION['prenom'] = $row[0]['prenom'];
  $avatar = $_SESSION['avatar'] = $row[0]['avatar'];
}
// var_dump($row[0]) 
?>

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
  <style>
    #collapseRH,
    #collapseScolarite,
    #collapseBiblio {
      display: none;
    }
    .collapse-item:hover{
      background-color: #ECEFF1;
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper" style="height: 700px;">
    <!-- bg color #f8f9fc -->
    <!-- Sidebar -->

    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class=" h-100 w-100" style="height: 100%;">

      <!-- Main Content -->
      <div>

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <!-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button> -->

          <!-- Topbar Search -->
          <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            
              <!-- Dropdown - Messages -->
              

            <!-- Nav Item - Alerts -->
            

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $nom . "<br>" . $prenom ?></span>
                <img class="img-profile rounded-circle" src="<?php echo  $avatar ;?>">
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
        <div class="container ">

          <!-- Choose Text -->
          <div class="text-center">
            <div class="card-body font-weight-bold text-gray-800 text-lg">
              <h2>Que voulez vous modifier :</h2>
            </div>
          </div>

          <div style="height: 500px; " class=" d-flex justify-content-center text-center">

            <!-- First Box -->

            <div class="col-xl-3 col-md-3 m-2 card shadow border-bottom-success" style="height: 160px;">
              <div class="nav-link collapsed RH" onclick="displayDiv('RH')">
                <div class="card-body py-3 ">
                  <h1 class="m-auto text-success"><i class="fas fa-users "></i></h1>
                </div>
                <div class="card-body font-weight-bold text-gray-800 text-lg">
                  RH</div>
              </div>
              <div id="collapseRH" class="collapse card shadow">
                <div class="bg-white py-2 collapse-inner rounded">
                  <div class="collapse-item ">
                    <a class="nav-link m-auto " href="administration.php?display=Administration">
                      <div class="h5  text-success d-inline-flex">
                        <div><i class="fas fa-user-tie "></i></div>
                        <div class="text-gray-800 ml-4 ">Administrateur</div>
                      </div>
                    </a>
                  </div>
                  <hr>
                  <div class="collapse-item ">
                    <a class="nav-link  m-auto" href="administration.php?display=Professeur">
                      <div class="h5 text-success d-inline-flex">
                        <div><i class="fas fa-chalkboard-teacher "></i></div>
                        <div class="text-gray-800 ml-4 ">Professeur</div>
                      </div>
                    </a>
                  </div>

                </div>
              </div>
            </div>



            <!-- Second Box -->
            <div class="col-xl-3 col-md-3 m-2 card shadow border-bottom-warning" style="height: 160px;">
              <div class="nav-link collapsed Scolarite" onclick="displayDiv('Scolarite')">
                <div class="card-body py-3 ">
                  <h1 class="m-auto text-warning"><i class=" fas fa-graduation-cap w-100"></i></h1>
                </div>
                <div class="card-body font-weight-bold text-gray-800 text-lg">
                  Scolarité
                </div>
              </div>
              <div id="collapseScolarite" class="collapse card shadow">
                <div class="bg-white py-2 collapse-inner rounded">
                  <div class="collapse-item ">
                    <a class="nav-link  m-auto" href="administration.php?display=Classes">
                      <div class="h5  text-warning d-inline-flex">
                        <div><i class="fas fa-user-graduate "></i></div>
                        <div class="text-gray-800 ml-4 ">Classes</div>
                      </div>
                    </a>
                  </div>
                  <hr>
                  <div class="collapse-item ">
                    <a class="nav-link m-auto" href="administration.php?display=Etudiants">
                      <div class="h5  text-warning d-inline-flex">
                        <div><i class="fas fa-users-cog "></i></div>
                        <div class="text-gray-800 ml-4 ">Etudiants</div>
                      </div>
                    </a>
                  </div>
                  <hr>
                  <div class="collapse-item ">
                    <a class="nav-link m-auto" href="administration.php?display=Seances">
                      <div class="h5  text-warning d-inline-flex">
                        <div><i class="fas fa-atom "></i></div>
                        <div class="text-gray-800 ml-4 ">Séances</div>
                      </div>
                    </a>
                  </div>

                </div>
              </div>
            </div>
            <!-- Third Box -->
            <div class="col-xl-3 col-md-3 m-2 card shadow  border-bottom-primary" style="height: 160px;">
              <div class="nav-link collapsed Programme" href="#" onclick="displayDiv('Programme')" >
                <div class="card-body py-3 ">
                  <h1 class="m-auto text-primary"><i class=" fas fa-atom w-100"></i></h1>

                </div>
                <div class="card-body font-weight-bold text-gray-800 text-lg">
                  Programme</div>
              </div>
              <div id="collapseProgramme" class="collapse card shadow">
                <div class="bg-white py-2 collapse-inner rounded">
                  <div class="collapse-item ">
                    <a class="nav-link m-auto" href="administration.php?display=Filiere">
                      <div class="h5  text-primary d-inline-flex">
                        <div><i class="fas fa-atom "></i></div>
                        <div class="text-gray-800 ml-4 ">Filières</div>
                      </div>
                    </a>
                  </div>
                  <hr>
                  <div class="collapse-item ">
                    <a class="nav-link m-auto" href="administration.php?display=Matiere">
                      <div class="h5   text-primary d-inline-flex">
                        <div><i class="fas fa-atom "></i></div>
                        <div class="text-gray-800 ml-4 ">Matieres</div>
                      </div>
                    </a>
                  </div>

                </div>
              </div>
            </div>
            
          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


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
  <script>
    const divRH = document.getElementById("collapseRH");
    const divScolarite = document.getElementById("collapseScolarite");
    const divBiblio = document.getElementById("collapseBiblio");
    const divProgramme = document.getElementById("collapseProgramme");

    function displayDiv(d) {
      divRH.style.display ="none";
      divScolarite.style.display ="none";
      divBiblio.style.display ="none";
      divProgramme.style.display ="none";
      switch (d) {
        case "RH":
          divRH.style.display ="block";
          break;
        case "Scolarite":
          divScolarite.style.display ="block";
          break;
        case "Biblio":
          divBiblio.style.display ="block";
          break;
        case "Programme":
          divProgramme.style.display ="block";
          break;
      }

    }
  </script>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>