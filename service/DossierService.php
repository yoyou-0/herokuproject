<?php

include_once RACINE . '/classes/Dossier.php';
include_once RACINE . '/connexion/Connexion.php';
include_once RACINE . '/dao/IDao.php';

class DossierService implements IDao {

    private $connexion;

    function __construct() {
        $this->connexion = new Connexion();
    }


    public function delete($o) {
        $query = "delete from dossiers where id = " . $o->getId();
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute() or die('Erreur SQL');
    }

    public function findAll() {
        $etds = array();
        $query = "select * from dossiers";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new Dossier($e->id, $e->project_name, $e->type, $e->username, $e->add_at, $e->etat, $e->file_path);
        }
        return $etds;
    }
    
    public function findDossierByUserNameApi ($username){
        $etds = array();
        $query = "select * from dossiers where username='".$username."'";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);     
    }
    
    public function findDossierByEtatApi ($etat){
        $etds = array();
        $query = "select * from dossiers where etat='".$etat."'";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);     
    }

    public function findDossierByDateApi ($add_at){
        $etds = array();
        $query = "select * from dossiers where add_at='".$add_at."'";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);     
    }
    
    
    public function findDossierByUserName($username) {
        $etds = array();
        $query = "select * from dossiers where username='".$username."'";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new Dossier($e->id, $e->project_name, $e->type, $e->username, $e->add_at, $e->etat, $e->file_path);
        }
        return $etds;
    }
    
     public function findDossierByEtat($etat) {
        $etds = array();
        $query = "select * from dossiers where etat='".$etat."'";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new Dossier($e->id, $e->project_name, $e->type, $e->username, $e->add_at, $e->etat, $e->file_path);
        }
        return $etds;
    }


    public function findDossierByDate($add_at) {
        $etds = array();
        $query = "select * from dossiers where add_at='".$add_at."'";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new Dossier($e->id, $e->project_name, $e->type, $e->username, $e->add_at, $e->etat, $e->file_path);
        }
        return $etds;
    }
    
    
    
    
    public function findUserName() {
        $villes = array();
        $query = "select distinct(username) as username from dossiers";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($v = $req->fetch(PDO::FETCH_OBJ)) {
            $villes[] = $v->username;
        }
        return $villes;
    }
    
    public function findEtat() {
        $villes = array();
        $query = "select distinct(etat) as etat from dossiers";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($v = $req->fetch(PDO::FETCH_OBJ)) {
            $villes[] = $v->etat;
        }
        return $villes;
    }
   

    public function findUsernameApi() {
        $villes = array();
        $query = "select distinct(username) as username from dossiers";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
       
        return $req->fetchAll(PDO::FETCH_ASSOC);
                
    }
    
    public function findEtatApi() {
        $villes = array();
        $query = "select distinct(etat) as etat from dossiers";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
       
        return $req->fetchAll(PDO::FETCH_ASSOC);
                
    }
    
    
    
    
    
    public function findById($id) {
        $query = "select * from dossiers where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new Dossier($e->id, $e->project_name, $e->type, $e->username,$e->add_at, $e->etat, $e->file_path);
        }
        return $etd;
    }
    
    public function findAllApi() {
        $query = "select * from dossiers";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC);
                
}

}

