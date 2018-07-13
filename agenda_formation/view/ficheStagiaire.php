<?php


   
    
    

    /*
    echo $stagiaire['etudiant']."</br>";
    echo $stagiaire['sexe']."</br>";
    echo $stagiaire['date_naissance']."</br>";
    echo $stagiaire['ville']."</br>";
    echo $stagiaire['mail']."</br>";
    echo $stagiaire['telephone']."</br>";
     */

echo "<dl>
  <dt>Etudiant :</dt>
  <dd>
    ".$stagiaire['etudiant']."
  </dd>
  <dt>Sexe:</dt>
  <dd>
    ".$stagiaire['sexe']."
  </dd>
  <dt>Date de naissance :</dt>
  <dd>
    ".$stagiaire['date_naissance']."
  </dd>
  <dt>Ville :</dt>
  <dd>
    ".$stagiaire['ville']."
  </dd>
  <dt>Adresse mail :</dt>
  <dd>
    ".$stagiaire['mail']."
  </dd>
  <dt>Téléphone :</dt>
  <dd>
    ".$stagiaire['telephone']."
  </dd>
  
</dl>";




