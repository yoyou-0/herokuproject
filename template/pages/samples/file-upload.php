<?php 

    // Database connection
    include("config/database.php");
    
    if(isset($_POST["submit"])) {
        // Set image placement folder
        $target_dir = "C:\\\Users\\\User\\\Desktop\\";
        // Get file path
        $target_file = $target_dir ."\\". basename($_FILES["fileUpload"]["name"]);
        // Get file extension
        $imageExt = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // Allowed file types
        $allowd_file_ext = array("zip", "docx"); 

        if (!file_exists($_FILES["fileUpload"]["tmp_name"])) {
           $resMessage = array(
               "status" => "alert-danger",
               "message" => "Selectionner une image pour l'importer."
           );
        } else if (!in_array($imageExt, $allowd_file_ext)) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "Les formats des fichiers autorisés sont: .zip and .docx ."
            );            
        } else if ($_FILES["fileUpload"]["size"] > 2097152) {
            $resMessage = array(
                "status" => "alert-danger",
                "message" => "Fichier de taille Grande!"
            );
        }  else {
            if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
                
                    $resMessage = array(
                        "status" => "alert-success",
                        "message" => "Dossier Bien Importer!"
                    );                 
                 
            } else {
                $resMessage = array(
                    "status" => "alert-danger",
                    "message" => "Echec!"
                );
            }
        }

    }

?>