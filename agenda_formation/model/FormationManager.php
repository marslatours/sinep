<?php

require_once('Manager.php');

class FormationManager extends Manager {
    
    //lister toutes les voitures
    /*
    function getVoitures(){
        $db = $this->dbConnect();
        $req = $db->query("SELECT titre_film,annee_film,duree_film FROM Film");
        return $req;
    }
    */
      
    /*
    function getPlaqueImmat(){
        $db = $this->dbConnect();
        $req = $db->query("SELECT titre_film,annee_film,duree_film,CONCAT(prenom_realisateur,' ',nom_realisateur) as realisateur,f.id_realisateur as id FROM Film f,Realisateur r WHERE f.id_realisateur=r.id_realisateur");
        return $req;
    }
    
    function getAfficheFilm($idfilm){
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT titre_film,annee_film,duree_film,CONCAT(prenom_realisateur,' ',nom_realisateur) as realisateur,f.id_realisateur as id FROM Film f,Realisateur r WHERE f.id_realisateur=r.id_realisateur && id_film=?");
        $sth->execute(array('$idfilm'));
        
        return $req;
    }
  
    //affiche les détails d'une voiture
    function getInfoVoiture($id_voiture){
        //...
    }
    */
    
    
    
        
    function getFormation($id = null){
        $db = $this->dbConnect();
        $sql = "SELECT f.id_formation, intitule, date_debut, date_fin, quantite_place, COUNT(id_stagiaire) as compteur
                FROM formations f, participer p
                WHERE f.id_formation = p.id_formation ";
        if($id){
            $sql.= "AND f.id_formation = $id";
            $req = $db->query($sql);
            return $req->fetch();
        }
        else{
            $sql.= "GROUP BY id_formation";
            $req = $db->query($sql);
            return $req;
        }
        
                         
        return $req;
        
    }
    function getStagiaires(){
        $db = $this->dbConnect();
        $req = $db->query("SELECT  CONCAT(nom,' ',prenom) AS etudiant, ville, date_naissance, mail, id_stagiaire, sexe, telephone
                           FROM stagiaires ");
        return $req;
        
    }
    
    function getStagiaireFromId($idStagiaire){
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT CONCAT(nom,' ',prenom) AS etudiant, ville, date_naissance, mail, id_stagiaire, sexe, telephone
                           FROM stagiaires
                           WHERE id_stagiaire=?");
        
        $req->execute(array($idStagiaire));
       
        return $req->fetch();
    }
    
    function insertFormation($data){
        var_dump($_POST);
    }
    
    function insertStagiaire($data){
        echo "Ville :".$_POST["ville"];
        echo "<br>";
        var_dump($_POST);
    }
    
    
}
