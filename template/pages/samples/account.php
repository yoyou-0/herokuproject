<?php 

session_start();

require 'functions.php';
logged_only();

?>


<h1>Votre Compte <?= $_SESSION['auth']->username; ?></h1>

<?php debug($_SESSION); ?>