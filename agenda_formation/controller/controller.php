<?php

require_once 'model/FormationManager.php';
/*
//le contrôleur appelle le manager (modèle) et sa méthode getVoitures()
function getVoitures(){
    $voitureManager = new VoitureManager();
    $voitures = $voitureManager->getVoitures();
    require 'view/getVoituresView.php';
}

function getPlaqueImmat(){
    $voitureManager = new VoitureManager();
    $plaquesImmat = $voitureManager->getPlaqueImmat();
    require 'view/listFilms.php';
}

function getAfficheFilm(){
    $voitureManager = new VoitureManager();
    $plaquesImmat = $voitureManager->getPlaqueImmat();
    require 'view/detailsFilm.php';
}
*/
function getFormation(){
    $voitureManager = new FormationManager();
    $plaquesImmat = $voitureManager->getFormation();
    require 'view/listeFormation.php';
}

function getStagiaire(){
    $voitureManager = new FormationManager();
    $plaquesImmat = $voitureManager->getStagiaires();
    require 'view/listeStagiaire.php';
}

function getFicheStagiaire($id){
    $voitureManager = new FormationManager();
    $stagiaire = $voitureManager->getStagiaireFromId($id);
    require 'view/ficheStagiaire.php';
    
}

function getFicheFormation($id){
    $voitureManager = new FormationManager();
    $formation = $voitureManager->getFormation($id);
    require 'view/ficheFormation.php';
    
}

function ajouterFormation($data){
    $formation = new FormationManager();
    
    $formation->insertFormation($data);
    require 'view/ficheFormation.php';
    
}


function ajouterStagiaire($data){
    $formation = new FormationManager();
    
    $formation->insertStagiaire($data);
    require 'view/ficheStagiaire.php';
    
}