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
    if(isset($_GET['id']) && isset($_GET['token'])){

        require 'db.php';
        require 'functions.php';
        $req = $pdo->prepare('SELECT * FROM users WHERE id = ? AND reset_token IS NOT NULL AND reset_token = ? AND reset_at > DATE_SUB(NOW(), INTERVAL 30 MINUTE)');

        $req->execute([$_GET['id'], $_GET['token']]);
        $user = $req->fetch();

        if($user){
            if(!empty($_POST)){
                if(!empty($_POST['password']) && $_POST['password'] == $_POST['password_confirm']){
                    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                    $pdo->prepare('UPDATE users SET password = ?, reset_at = NULL , reset_token = NULL ')->execute([$password]);
                    session_start();
                    $error ="Votre Mot de passe a bien été modifié ";
                    $_SESSION['auth']=$user;
                    header('Location: login.php');
                    exit();
                }
            }
        }else{
            session_start();
            $error = "Ce token n'est pas valide";
            header('Location: login.php'); 
            exit();
        }


    }else{
        header('Location: login.php');
        exit();
    }

    

    ?>






    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Réinitialisation du Mot de Passe!</h3>
                <?php if (!empty($error)) : ?>
                <div class="alert alert-danger">
                  
                      <?= $error; ?>
                

                </div>
              <?php endif; ?>

                <form action="" method="POST">
                  
                  
                  <div class="form-group">
                    <label>Password *</label>
                    <input name="password" type="text" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password Confirmation *</label>
                    <input name="password_confirm" type="text" class="form-control p_input">
                  </div>
                  <a href="login.php">
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Réinitialiser Mon Mot de Passe</button>
                  </div>
                  </a>
                  <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="register.php"> Sign Up</a></p>
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