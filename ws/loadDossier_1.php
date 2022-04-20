<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../racine.php';
    include_once RACINE . '/service/DossierService.php';
    loadAll();
}

function loadAll() {
    $es = new DossierService();

    header('Content-type: application/json');
    echo json_encode($es->findAllApi());
}

     
