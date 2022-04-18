<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ENSA PROF</title>
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
    if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])){
      require_once 'db.php';
      require_once 'functions.php';
      $req = $pdo->prepare('SELECT * FROM users WHERE (username = :username OR email = :username) AND confirmed_at IS NOT NULL');
      $req->execute(['username' => $_POST['username']]);
      $user = $req->fetch();
      if(password_verify($_POST['password'], $user->password)){
        session_start();
        $_SESSION['auth'] = $user;
        $error = 'Vous etes maintenant connecte';
        $d = $_SESSION['auth']->role;
        if($d == 'user'){
          header('Location: ../../index.php');
          exit();
        }elseif($d == 'admin'){
          header('Location: ../../indexA.php');
          exit();
          }
      }else{
        $error = 'Identifiant ou mot de passe incorrect !';
      }
      
    }
?>







    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Connexion</h3>
                <?php if (!empty($error)) : ?>
                <div class="alert alert-danger">
                  
                      <?= $error; ?>
                

                </div>
              <?php endif; ?>

                <form action="" method="POST">
                  <div class="form-group">
                    <label>Nom d'Utilisateur ou Email *</label>
                    <input name="username" type="text" class="form-control p_input">
                    
                  </div>
                  
                  <div class="form-group">
                    <label>Mot de passe *</label>
                    <input name="password" type="password" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="1"> Se souvenir de moi </label>
                    </div>
                    <a href="forgot.php" class="forgot-pass">Mot de passe oublié?</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Se Connecter</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Vous n'avez pas de compte?<a href="register.php"> S'inscrire</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
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
  </body>
</html>