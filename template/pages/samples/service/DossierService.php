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
            $etds[] = new Dossier($e->id, $e->project_name, $e->type, $e->username, $e->add_at, $e->etat);
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
    
    
    
    public function findDossierByUserName($username) {
        $etds = array();
        $query = "select * from dossiers where username='".$username."'";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        while ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etds[] = new Dossier($e->id, $e->project_name, $e->type, $e->username, $e->add_at, $e->etat);
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
    
   

     public function findUsernameApi() {
        $villes = array();
        $query = "select distinct(username) as username from dossiers";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
       
        return $req->fetchAll(PDO::FETCH_ASSOC);
                
    }
    
    
    
    
    
    public function findById($id) {
        $query = "select * from dossiers where id = " . $id;
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute();
        if ($e = $req->fetch(PDO::FETCH_OBJ)) {
            $etd = new Dossier($e->id, $e->project_name, $e->type, $e->username,$e->add_at, $e->etat);
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

