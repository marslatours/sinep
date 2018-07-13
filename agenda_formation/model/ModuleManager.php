<?php

require_once('FormationManager.php');


function getModuleFromId($module){
        $db = $this->dbConnect();
        $req = $db->prepare("SELECT intitule, nom_module, duree_formation, description, date_debut, date_fin, quantite_place
                            FROM formations f, Avoir a, module m
                            WHERE f.id_formation = a.id_formation AND a.id_module = m.id_module AND id_module =?");
        
        $req->execute(array($module));
       
        return $req->fetch();
    }