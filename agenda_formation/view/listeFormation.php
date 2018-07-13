<?php

echo "<table style='border:1px solid black'><th>Intitulé Session</th><th>Date de début</th><th>Date de fin</th><th>Nb places théoriques</th><th>Nb places réservées</th><th>Nb places restantes</th><th>Détails programme</th>";
while($plaqueImmat = $plaquesImmat->fetch()){
    
    
    $reste_place=$plaqueImmat['quantite_place'] - $plaqueImmat['compteur'];
    
    
    echo "<tr>";
    echo "<td>".$plaqueImmat['intitule']."</td>";
    echo "<td>".$plaqueImmat['date_debut']."</td>";
    echo "<td>".$plaqueImmat['date_fin']."</td>";
    echo "<td>".$plaqueImmat['quantite_place']."</td>";
    echo "<td>".$plaqueImmat['compteur']."</td>";
    echo "<td>$reste_place</td>";
    echo "<td><a href='?page=fiche-formation&amp;id=".$plaqueImmat['id_formation']."' target='_blank'>Plus infos</a></td>";
    echo "</tr>";
}
$plaquesImmat->closeCursor();

echo "</table>";


echo "<a href='?page=ajout-formation'>Ajouter une formation</a>";