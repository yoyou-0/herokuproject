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
    if(!empty($_POST) && !empty($_POST['email']) ){
      require_once 'db.php';
      require_once 'functions.php';
      $req = $pdo->prepare('SELECT * FROM users WHERE email = ? AND confirmed_at IS NOT NULL');
      $req->execute([$_POST['email']]);
      $user = $req->fetch();
      if($user){
        $reset_token = str_random(60);
        $pdo->prepare('UPDATE users SET reset_token = ?, reset_at = NOW() WHERE id = ?')->execute([$reset_token, $user->id]);
        
        $error = 'Les instructions du rappel de mot de passe vous ont été envoyée par emails';
        
        $receiver = $_POST['email'];
      $subject = "Réinistialisation de votre mot de passe";
      $body = "Afin de réinitialiser votre mot de passe merci de cliquer sur ce lien\n\n http://localhost:8080/corona-free-dark-bootstrap-admin-template-1.0.0/template/pages/samples/reset.php?id={$user->id}&token=$reset_token";
      $sender = "From:haynahanim09@gmail.com";
      if (mail($receiver, $subject, $body, $sender)) {
        $_SESSION['flash']['success']= 'Email sent successfully to $receiver';
      } else { 
        $_SESSION['flash']['danger']= 'Failed to send the email to $receiver';
      }


        header('Location: login.php');
        exit();
      }else{
        $error = 'Aucun compte ne correspond a cet email !';
      }
      
    }
?>







    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Mot De Passe Oublié!</h3>
                <?php if (!empty($error)) : ?>
                <div class="alert alert-danger">
                  
                      <?= $error; ?>
                

                </div>
              <?php endif; ?>

                <form action="" method="POST">
                  <div class="form-group">
                    <label>Email *</label>
                    <input name="email" type="email " class="form-control p_input">
                    
                  </div>
                  
                 
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Récupérer Mon Mot De Passe!</button>
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