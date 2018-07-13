<?php

    $reste_place=$formation['quantite_place'] - $formation['compteur'];
    
    /*
    
    echo "<div id='titre'><b>Intitulé :</b>".$formation['intitule']."</div>";
    echo "<b>Date de début :</b>".$formation['date_debut']."</br>";
    echo "<b>Date de fin :</b>".$formation['date_fin']."</br>";
    echo "<b>Nb places théoriques :</b> ".$formation['quantite_place']."</br>";
    echo "<b>Nb places réservées :</b> ".$formation['compteur']."</br>";
    echo "<b>Nb places restantes :</b> ".$reste_place."</br>";
*/
    
    
    
    
    
    
    
    echo "<dl>
  <dt>Intitulé :</dt>
  <dd>
    ".$formation['intitule']."
  </dd>
  <dt>Date de début :</dt>
  <dd>
    ".$formation['date_debut']."
  </dd>
  <dt>Date de fin :</dt>
  <dd>
    ".$formation['date_fin']."
  </dd>
  <dt>Nb places théoriques :</dt>
  <dd>
    ".$formation['quantite_place']."
  </dd>
  <dt>Nb places réservées :</dt>
  <dd>
    ".$formation['compteur']."
  </dd>
  <dt>Nb places restantes :</dt>
  <dd>
    ".$reste_place."
  </dd>
  
</dl>";

    
    
    
    
    
    
    
?>

