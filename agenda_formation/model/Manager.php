<?php

class Manager{
    
    protected function dbConnect(){
        
        try{
            //variables de connexion
            $host = 'phpmyadmin.elan-formation.eu';
            $dbname = 'Bruno_GestionFormation';
            $user = 'b_eichenberger';
            $password = 'elanformation67';
            
            $db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=UTF8;',$user,$password);
            $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $db;
        }
        catch(PDOException $e){
            echo 'Echec lors de la connexion : '.$e->getMessage();
            die();
        }
    }
}
