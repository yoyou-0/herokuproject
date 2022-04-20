<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ENSA PROF</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="template/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="template/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="template/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="template/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="template/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="template/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="template/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="template/assets/images/favicon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php 

    session_start();
    
    require 'functions.php';
    logged_only();
    
    ?>
    
<?php
require 'connection.php';
$_SESSION["id"] = $_SESSION['auth']->id;
$sessionId = $_SESSION["id"];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $sessionId"));
?>




    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="" href="template/index.html"><img src="template/logo-ensaj.png" alt="logo" width="150" height="50"/></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
              <div class="count-indicator">
                
                <?php
                $id = $user["id"];
                $name = $user["username"];
                $image = $user["image"];
                ?>
                <img style="border-radius: 50%;border: 0px;" src="template/pages/samples/img/<?php echo $image; ?>" width = 38 height = 38 title="<?php echo $image; ?>">
                <span class="count bg-success"></span>
                
                
            
                    </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?= $_SESSION['auth']->username; ?></h5>
                  <span>Membre D'Or</span>
                </div>
              </div>
              
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Paramétres du compte</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Changer votre Mot de Passe</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-calendar-today text-success"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">To-do</p>
                  </div>
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="index.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Acceuil</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" href="template/pages/charts/chartjs.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Statistiques</span>
            </a>
          </li>
          
          <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-folder-multiple-outline"></i>
              </span>
              <span class="menu-title">Dossiers</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="template/pages/samples/registerd.php"> Depot </a></li>
                <li class="nav-item"> <a class="nav-link" href="template/pages/samples/etatd.php"> Etat </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="template/pages/forms/profilU.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-box"></i>
              </span>
              <span class="menu-title">Profil</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation.html">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="templateassets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav w-100">
              <li class="nav-item w-100">
                <form class="nav-link mt-2 mt-md-0 d-none d-lg-flex search">
                  <input type="text" class="form-control" placeholder="Search products">
                </form>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown"  href="template/pages/samples/registerd.php">+ Deposer un nouveau dossier</a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="createbuttonDropdown">
                  
              </li>
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
              <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email"></i>
                <span class="count bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="template/assets/images/faces/face4.png" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">ENSAJ vous a envoyé un message</p>
                    <p class="text-muted mb-0"> Nous vous souhaitons le bienvenu!</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="template/assets/images/faces/face4.png" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1">ENSAJ vous a envoyé un message</p>
                    <p class="text-muted mb-0"> Inscription Finalisée!</p>
                  </div>
                </a>

                <div class="dropdown-divider"></div>

                <p class="p-3 mb-0 text-center">2 new messages</p>
              </div>
            </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifications</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Event today</p>
                      <p class="text-muted ellipsis mb-0"> Just a reminder that you have an event today </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Paramétres</p>
                      <p class="text-muted ellipsis mb-0"> Modifier L'Acceuil</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Launch Admin</p>
                      <p class="text-muted ellipsis mb-0"> New admin wow! </p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">See all notifications</p>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
               
               <?php
               $id = $user["id"];
               $name = $user["username"];
               $image = $user["image"];
               ?>
               <img style="border-radius: 50%;border: 3px solid #007BFF;" src="template/pages/samples/img/<?php echo $image; ?>" width = 50 height = 50 title="<?php echo $image; ?>">
        
                       <p class="mb-0 d-none d-sm-block navbar-profile-name"><?= $_SESSION['auth']->username; ?></p>
                       <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                     </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Paramétres</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="template/pages/samples/logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Se déconnecter</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Paramétres Avancés</p>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="template/assets/images/dashboard/Group126@2x.png" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Voulez-vous suivre l'etat de vos dossier?</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">Consulter Maintenant l'état d'avancement de vos dossiers!</p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="template/pages/samples/etatd.php" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Consulter!</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <?php
                        require 'dbconfig.php';

                        $u= $_SESSION['auth']->username; 
                        $query = "SELECT id FROM dossiers WHERE DATE(add_at) = CURDATE() AND username = '$u' ORDER BY id";
                        $query_run = mysqli_query($connection, $query);

                        $row = mysqli_num_rows($query_run);

                        echo '<h3 class="mb-0"> '.($row).' </h3>';
                        ?>
                        <?php
                        require 'dbconfig.php';
                        $u= $_SESSION['auth']->username; 
                        $query = "SELECT id FROM dossiers WHERE username='$u' ORDER BY id";
                        $query1 = "SELECT id FROM dossiers WHERE DATE(add_at) = CURDATE() AND username='$u' ORDER BY id";
                        $query_run = mysqli_query($connection, $query);
                        $query_run1 = mysqli_query($connection, $query1);

                        $row = mysqli_num_rows($query_run);
                        $row1 = mysqli_num_rows($query_run1);

                       
                        ?>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Vos Dossiers Déposés Aujourd'hui</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">


                        <?php
                        require 'dbconfig.php';
                        $u= $_SESSION['auth']->username; 
                        $query = "SELECT id FROM dossiers WHERE DATE(add_at) = CURDATE() AND etat='en cours' AND username='$u' ORDER BY id ";
                        $query_run = mysqli_query($connection, $query);

                        $row = mysqli_num_rows($query_run);

                        echo '<h3 class="mb-0"> '.($row).' </h3>';
                        ?>


                        <?php
                        require 'dbconfig.php';
                        $u= $_SESSION['auth']->username;
                        $query = "SELECT id FROM dossiers WHERE username = '$u' ORDER BY id";
                        $query1 = "SELECT id FROM dossiers WHERE DATE(add_at) = CURDATE() AND etat='en cours' AND username = '$u' ORDER BY id";
                        $query_run = mysqli_query($connection, $query);
                        $query_run1 = mysqli_query($connection, $query1);

                        $row = mysqli_num_rows($query_run);
                        $row1 = mysqli_num_rows($query_run1);

                        
                        ?>

                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Vos dossiers en cours de traitement Aujourd'hui</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <?php
                        require 'dbconfig.php';
                        $u= $_SESSION['auth']->username;
                        $query = "SELECT id FROM dossiers WHERE DATE(add_at) = CURDATE() AND etat='Validé' AND username = '$u' ORDER BY id ";
                        $query_run = mysqli_query($connection, $query);

                        $row = mysqli_num_rows($query_run);

                        echo '<h3 class="mb-0"> '.($row).' </h3>';
                        ?>
                        <?php
                        require 'dbconfig.php';
                        $u= $_SESSION['auth']->username;
                        $query = "SELECT id FROM dossiers ORDER BY id";
                        $query1 = "SELECT id FROM dossiers WHERE DATE(add_at) = CURDATE() AND etat='Validé' AND username = '$u' ORDER BY id";
                        $query_run = mysqli_query($connection, $query);
                        $query_run1 = mysqli_query($connection, $query1);

                        $row = mysqli_num_rows($query_run);
                        $row1 = mysqli_num_rows($query_run1);

                       
                        ?>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"> Vos Dossiers Validés Aujourd'hui</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                        <?php
                        require 'dbconfig.php';

                        $query = "SELECT id FROM dossiers WHERE DATE(add_at) = CURDATE() AND etat='Rejeté' ORDER BY id ";
                        $query_run = mysqli_query($connection, $query);

                        $row = mysqli_num_rows($query_run);

                        echo '<h3 class="mb-0"> '.($row).' </h3>';
                        ?>
                        <?php
                        require 'dbconfig.php';

                        $query = "SELECT id FROM dossiers ORDER BY id";
                        $query1 = "SELECT id FROM dossiers WHERE DATE(add_at) = CURDATE() AND etat='Rejeté' ORDER BY id";
                        $query_run = mysqli_query($connection, $query);
                        $query_run1 = mysqli_query($connection, $query1);

                        $row = mysqli_num_rows($query_run);
                        $row1 = mysqli_num_rows($query_run1);

                        
                        ?>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span class="mdi mdi-arrow-top-right icon-item"></span>
                        </div>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal">Dossiers Rejetés Aujourd'hui</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Vos Dossiers</h4>
                    <p class="card-description"> Ce tableau rassemble tous  <code>vos dossiers</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-bordered table-contextual">
                        <thead>
                          <tr>
                            <th> # </th>
                            <th> Nom </th>
                            <th> Type </th>
                            <th> Date de dépôt </th>
                          </tr>
                        </thead>
                        <tbody>
                          
                          <?php
                          include_once './racine.php';
                include_once RACINE . '/service/DossierService.php';
                $es = new DossierService();
                if(isset($_SESSION['auth']->username))
                foreach ($es->findDossierByUsername($_SESSION['auth']->username) as $e) {
                  $t = $e->getType();
                  if($t == 'dossier_p'){
                    ?>
                    <tr class="table-info">
                        <td><?php echo $e->getId(); ?></td>
                        <td><?php echo $e->getProjectName(); ?></td>
                        <td><?php echo $e->getType(); ?></td>
                        <td><?php echo $e->getAddAt(); ?></td>
                        
                    </tr>
                <?php }elseif($t == 'dossier_a'){ ?>
                  <tr class="table-warning">
                        <td><?php echo $e->getId(); ?></td>
                        <td><?php echo $e->getProjectName(); ?></td>
                        <td><?php echo $e->getType(); ?></td>
                        <td><?php echo $e->getAddAt(); ?></td>
                        
                    </tr>
                <?php }elseif($t == 'dossier_s'){ ?>
                  <tr class="table-success">
                        <td><?php echo $e->getId(); ?></td>
                        <td><?php echo $e->getProjectName(); ?></td>
                        <td><?php echo $e->getType(); ?></td>
                        <td><?php echo $e->getAddAt(); ?></td>
                        
                    </tr>
                  <?php } }?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="template/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="template/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="template/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="template/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="template/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="template/assets/js/off-canvas.js"></script>
    <script src="template/assets/js/hoverable-collapse.js"></script>
    <script src="template/assets/js/misc.js"></script>
    <script src="template/assets/js/settings.js"></script>
    <script src="template/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="template/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>