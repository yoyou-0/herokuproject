<?php

include_once '../racine.php';
include_once RACINE.'/service/Dossierervice.php';
extract($_GET);
header("location:".$file_path);