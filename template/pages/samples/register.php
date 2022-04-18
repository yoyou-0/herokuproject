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
  require_once 'functions.php';

  if (!empty($_POST)) {

    $errors = array();

    require_once 'db.php';

    if (empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])) {
      $errors['username'] = "Votre pseudo n'est pas valide (alphanumerique)";
    } else {
      $req = $pdo->prepare('SELECT id FROM users WHERE username = ?');
      $req->execute([$_POST['username']]);
      $user = $req->fetch();

      if ($user) {
        $errors['username'] = 'Ce pseudo est deja pris';
      }
    }

    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors['email'] = "Votre email n'est pas valide";
    }

    if ($_POST['password'] != $_POST['password_confirm']) {

      $errors['password'] = "Vous n'avez pas entre le meme mot de passe!";
    } else {
      $req = $pdo->prepare('SELECT id FROM users WHERE email = ?');
      $req->execute([$_POST['email']]);
      $user = $req->fetch();

      if ($user) {
        $errors['email'] = 'Cet email est deja utilise pour un autre compte';
      }
    }


    if (empty($errors)) {


      $req = $pdo->prepare("INSERT INTO users SET username = ?, password = ?, role = ?, email = ?, confirmation_token= ?");

      $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

      $token = str_random(60);
      $role = 'user';

      $req->execute([$_POST['username'], $password, $role, $_POST['email'], $token]);

      $user_id = $pdo->lastInsertId();

      $receiver = $_POST['email'];
      $subject = "Confirmation de votre compte";
      $body = "Afin de valider votre compte merci de cliquer sur ce lien:\n\n http://localhost:8080/corona-free-dark-bootstrap-admin-template-1.0.0/template/pages/samples/confirm.php?id=$user_id&token=$token";
      $sender = "From:haynahanim09@gmail.com";
      if (mail($receiver, $subject, $body, $sender)) {
        $_SESSION['flash']['success']= 'Email sent successfully to $receiver';
      } else { 
        $_SESSION['flash']['danger']= 'Failed to send the email to $receiver';
      }


      header('Location: register1.php');

      exit();
    }
  }

  ?>

  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="row w-100 m-0">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
          <div class="card col-lg-6 mx-auto">
            <div class="card-body px-5 py-5">
              <h3 class="card-title text-left mb-3">Inscription</h3>
              <?php if (!empty($errors)) : ?>
                <div class="alert alert-danger">
                  <p>Vous n'avez pas rempli le formulaire correctement</p>
                  <ul>
                    <?php foreach ($errors as $error) : ?>
                      <li><?= $error; ?></li>
                    <?php endforeach; ?>
                  </ul>

                </div>
              <?php endif; ?>
              <form action="" method="POST">
                <div class="form-group">
                  <label for="">Nom d'Utilisateur</label>
                  <input type="text" name="username" class="form-control p_input" required pattern="^[a-zA-Z0-9_]+$">
                </div>
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" name="email" class="form-control p_input" required>
                </div>
                <div class="form-group">
                  <label for="">Mot De Passe</label>
                  <input type="password" name="password" class="form-control p_input" required>
                </div>
                <div class="form-group">
                  <label for="">Confirmer le Mot De Passe</label>
                  <input type="password" name="password_confirm" class="form-control p_input" required>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between">

                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block enter-btn">S'inscrire!</button>
                </div>
                <div class="d-flex">
                  <button class="btn btn-facebook col mr-2">
                    <i class="mdi mdi-facebook"></i> Facebook </button>
                  <button class="btn btn-google col">
                    <i class="mdi mdi-google-plus"></i> Google plus </button>
                </div>
                <p class="sign-up text-center">Vous avez déjà un compte?<a href="login.html"> Se connecter</a></p>
                <p class="terms">En créant votre compte, vous accteptw tous les<a href="#"> Termes & Conditions</a></p>
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