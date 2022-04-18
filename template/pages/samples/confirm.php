<?php

$user_id = $_GET['id'];

$token = $_GET['token'];

require 'db.php';

$req = $pdo->prepare('SELECT * FROM users WHERE id = ?');

$req->execute([$user_id]);

$user = $req->fetch();

if($user && $user->confirmation_token == $token ){

    session_start();

    $pdo->prepare('UPDATE users SET confirmation_token = NULL, confirmed_at = NOW() WHERE id = ?')->execute([$user_id]);

    $_SESSION['flash']['success']= 'Votre comte a bien été validé';

    $_SESSION['auth'] = $user;

    header('Location: registerf.php');

    die('Votre création de compte a été créée avec succès!');
}else{
    $_SESSION['flash']['danger'] = "Ce token n'est plus valide!";
    
    header('Location: confirmechec.php');

}
