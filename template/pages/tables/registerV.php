<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PROFESSORS</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>

<body>
  <?php

  session_start();

  require '../../pages/samples/functions.php';
  logged_only();

  ?>
  <?php
  include_once './racine.php';
  include_once RACINE . '/service/DossierService.php';

  $es = new DossierService();
  ?>
  <div class="container-scroller">
    <!-- partial:../../partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="" href="../../index.html"><img src="../../logo-ensaj.png" alt="logo" width="150" height="50"/></a>
      </div>
      <ul class="nav">
        <li class="nav-item profile">
          <div class="profile-desc">
            <div class="profile-pic">
              <div class="count-indicator">
                <img class="img-xs rounded-circle " src="../../logo-ensaj.png" alt="">
                <span class="count bg-success"></span>
              </div>
              <div class="profile-name">
                <h5 class="mb-0 font-weight-normal"><?= $_SESSION['auth']->username; ?></h5>
                <span>Admin</span>
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
                  <p class="preview-subject ellipsis mb-1 text-small">Changer Mot de Passe</p>
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
          <a class="nav-link" href="indexA.php">
            <span class="menu-icon">
              <i class="mdi mdi-speedometer"></i>
            </span>
            <span class="menu-title">Acceuil</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="menu-icon">
              <i class="mdi mdi-chart-bar"></i>
            </span>
            <span class="menu-title">Statistiques</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="../../pages/charts/dossiersA.php">Dossiers en Attente</a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/charts/dossiersC.php">Dossiers en cours</a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/charts/dossiersV.php">Dossiers Validés</a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/charts/dossiersR.php">Dossiers Rejetés</a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <span class="menu-icon">
              <i class="mdi mdi-package"></i>
            </span>
            <span class="menu-title">Dossiers</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="../../pages/tables/registerV.php"> Validation d'état </a></li>
              <li class="nav-item"> <a class="nav-link" href="../../pages/tables/suivi.php"> Suivi </a></li>
            </ul>
          </div>
        </li>

        <li class="nav-item menu-items">
          <a class="nav-link" href="pages/forms/profilA.php">
            <span class="menu-icon">
              <i class="mdi mdi-account-box"></i>
            </span>
            <span class="menu-title">Profile</span>
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
      <!-- partial:../../partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
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
              <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" data-toggle="dropdown" href="pages/samples/registerd.php">+ Deposer un nouveau dossier</a>
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
                    <img src="assets/images/faces/face4.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1"></p>
                    <p class="text-muted mb-0"> </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face2.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1"></p>
                    <p class="text-muted mb-0"></p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="assets/images/faces/face3.jpg" alt="image" class="rounded-circle profile-pic">
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1"></p>
                    <p class="text-muted mb-0"> </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">0 nouveaux messages</p>
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
                    <p class="preview-subject mb-1">Nouveaux dossiers</p>
                    <p class="text-muted ellipsis mb-0"> Dossiers déposés aujourd'hui</p>
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
                    <p class="text-muted ellipsis mb-0"> Update dashboard </p>
                  </div>
                </a>

                <div class="dropdown-divider"></div>
                <p class="p-3 mb-0 text-center">Voir Tous Les Notifications</p>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="../../logo-ensaj.png" alt="">
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
                <a class="dropdown-item preview-item" href="../../pages/samples/logout.php">
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
          <div class="page-header">
            <h3 class="page-title"> Suivi de l'Etqt des Dossiers Déposés </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="../../indexA.php">Acceuil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
              </ol>
            </nav>
          </div>
          <form method="GET" action="controller/loadDossier_1.php">
            
          </form>
          <div class="row">

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <form method="GET" action="controller/loadDossier_1.php">
                  <h4 class="card-title">Hoverable Table</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>No Dossier</th>
                          <th>Username</th>
                          <th>Nom du Dossier</th>
                          <th>Type</th>
                          <th>Date de Dépôt</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php  
                        include_once RACINE . '/service/DossierService.php';
                        $es = new DossierService();
                        ?>
                        <?php
                          foreach ($es->findDossierByEtat('en cours') as $e) {
                        ?>
                          <form action="" method="POST">
            <?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'tuto');

if(isset($_POST['update'])) 
{
    $a = $e->getId();;

    $query = "UPDATE dossiers SET etat='$_POST[etat]' where id='$a'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated") </script>'; 
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>
        </form>
                        <?php  }
                          foreach ($es->findDossierByEtat('en cours') as $e) {
                        ?>
                          <tr>
                            <td><?php echo $e->getId(); ?></td>
                            <td><?php echo $e->getUsername(); ?></td>
                            <td><?php echo $e->getProjectName(); ?></td>
                            <td class="text-success"> <?php echo $e->getType(); ?></td>
                            <td class="text-danger"> <?php echo $e->getAddAt(); ?></td>
                            <td><label class="badge badge-warning"><?php echo $e->getEtat(); ?></label></td>
                            <td><label class="badge badge-info"><form action="" method="POST">
            <input type="text" name="etat" placeholder="Etat"/>
            
        </label><label class="badge badge-info">

            <input type="submit" name="update" value="UPDATE DATA"/>
            <?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'tuto');

if(isset($_POST['update'])) 
{
    $d = $e->getId();;

    $query = "UPDATE dossiers SET etat='$_POST[etat]' where id='$d'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated") </script>'; 
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>
        </form></label></td>
                          </tr>
                          <?php  }
                        include_once RACINE . '/service/DossierService.php';
                        $es = new DossierService();
                        ?>
                        <?php
                          foreach ($es->findDossierByEtat('en attente') as $e) {
                        ?>
                          <form action="" method="POST">
            <?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'tuto');

if(isset($_POST['update'])) 
{
    $a = $e->getId();;

    $query = "UPDATE dossiers SET etat='$_POST[etat]' where id='$a'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated") </script>'; 
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>
        </form>
                        <?php  }
                          foreach ($es->findDossierByEtat('en attente') as $e) {
                        ?>
                          <tr>
                            <td><?php echo $e->getId(); ?></td>
                            <td><?php echo $e->getUsername(); ?></td>
                            <td><?php echo $e->getProjectName(); ?></td>
                            <td class="text-success"> <?php echo $e->getType(); ?></td>
                            <td class="text-danger"> <?php echo $e->getAddAt(); ?></td>
                            <td><label class="badge badge-danger"><?php echo $e->getEtat(); ?></label></td>
                            <td><label class="badge badge-info"><form action="" method="POST">
            <input type="text" name="etat" placeholder="Etat"/>
            
        </label><label class="badge badge-info">

            <input type="submit" name="update" value="UPDATE DATA"/>
            <?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'tuto');

if(isset($_POST['update'])) 
{
    $d = $e->getId();;

    $query = "UPDATE dossiers SET etat='$_POST[etat]' where id='$d'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated") </script>'; 
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>
        </form></label></td>
                          </tr>
                          <?php  }
                        include_once RACINE . '/service/DossierService.php';
                        $es = new DossierService();
                        ?>
                        <?php
                          foreach ($es->findDossierByEtat('Accepté') as $e) {
                        ?>
                          <form action="" method="POST">
            <?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'tuto');

if(isset($_POST['update'])) 
{
    $bcc = $e->getId();;

    $query = "UPDATE dossiers SET etat='$_POST[etat]' where id='$bcc'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated") </script>'; 
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>
        </form>
                        <?php  }
                          foreach ($es->findDossierByEtat('Accepté') as $e) {
                        ?>
                          <tr>
                            <td><?php echo $e->getId(); ?></td>
                            <td><?php echo $e->getUsername(); ?></td>
                            <td><?php echo $e->getProjectName(); ?></td>
                            <td class="text-success"> <?php echo $e->getType(); ?></td>
                            <td class="text-danger"> <?php echo $e->getAddAt(); ?></td>
                            <td><label class="badge badge-success"><?php echo $e->getEtat(); ?></label></td>
                            <td><label class="badge badge-info"><form action="" method="POST">
            <input type="text" name="etat" placeholder="Etat"/>
            
        </label><label class="badge badge-info">

            <input type="submit" name="update" value="UPDATE DATA"/>
            <?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'tuto');

if(isset($_POST['update'])) 
{
    $bcc = $e->getId();;

    $query = "UPDATE dossiers SET etat='$_POST[etat]' where id='$bcc'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated") </script>'; 
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>
        </form></label></td>
                          </tr>
                        <?php } 
                          foreach ($es->findDossierByEtat('Rejeté') as $e) {
                        ?>
                          <tr>
                            <td><?php echo $e->getId(); ?></td>
                            <td><?php echo $e->getUsername(); ?></td>
                            <td><?php echo $e->getProjectName(); ?></td>
                            <td class="text-success"> <?php echo $e->getType(); ?></td>
                            <td class="text-danger"> <?php echo $e->getAddAt(); ?></td>
                            <td><label class="badge badge-danger"><?php echo $e->getEtat(); ?></label></td>
                            <td><label class="badge badge-info"><form action="" method="POST">
            <input type="text" name="etat" placeholder="Etat"/>
            
        </label><label class="badge badge-info">

            <input type="submit" name="update" value="UPDATE DATA"/>
            <?php 
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'tuto');

if(isset($_POST['update'])) 
{
    $a = $e->getId();;

    $query = "UPDATE dossiers SET etat='$_POST[etat]' where id='$a'";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated") </script>'; 
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
    }
}

?>
        </form></label></td>
                          </tr>
                        <?php }?>

                      </tbody>
                     
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © ENSAJ 2022</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> ENSAJ <a href="http://www.ensaj.ucd.ac.ma/?msclkid=e48b7940bc2111ec980485688ee380b6" target="_blank">PROFESSORS PLATFORM</a> </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <!-- End custom js for this page -->
</body>

</html>