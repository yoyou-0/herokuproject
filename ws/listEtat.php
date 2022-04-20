<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../racine.php';
    include_once RACINE . '/service/DossierService.php';
    load();
}

function load() {
    extract($_POST);
    $es = new DossierService();
   
    header('Content-type: application/json');
    echo json_encode($es->findDossierApi());
}
