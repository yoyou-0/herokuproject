<?php

class Dossier {
    private  $id;
    private $project_name;
    private $type;
    private $username;
    private $add_at;
    private $etat;
    function __construct($id, $project_name, $type, $username, $add_at, $etat) {
        $this->id = $id;
        $this->project_name = $project_name;
        $this->type = $type;
        $this->username = $username;
        $this->add_at = $add_at;
        $this->etat = $etat;
    }
    function getId() {
        return $this->id;
    }

    function getProjectName() {
        return $this->project_name;
    }

    function getType() {
        return $this->type;
    }

    function getUsername() {
        return $this->username;
    }
    
    function getAddAt() {
        return $this->add_at;
    }
    

    function getEtat() {
        return $this->etat;
    }

    function setUsername($id) {
        $this->id = $id;
    }

    function setProjectName($project_name) {
        $this->project_name = $project_name;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setSurface($username) {
        $this->username = $username;
    }
    
    function setNumEtage($add_at) {
        $this->add_at = $add_at;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

       
}
