<?php

echo "<table style='border:1px solid black'><th>Nom du stagiaire</th><th>Sexe</th><th>Date de naissance</th><th>Ville</th><th>Courriel</th><th>Téléphone</th>";
while($plaqueImmat = $plaquesImmat->fetch()){
    
   
    
    
    echo "<tr>";
    echo "<td>".$plaqueImmat['etudiant']."</td>";
    echo "<td>".$plaqueImmat['sexe']."</td>";
    echo "<td>".$plaqueImmat['date_naissance']."</td>";
    echo "<td>".$plaqueImmat['ville']."</td>";
    echo "<td>".$plaqueImmat['mail']."</td>";
    echo "<td>".$plaqueImmat['telephone']."</td>";
    echo "<td><a href='?page=fiche-stagiaire&amp;id=".$plaqueImmat['id_stagiaire']."' target='_blank'>Plus infos</a></td>";
    echo "</tr>";
}
$plaquesImmat->closeCursor();

echo "</table>";
echo "<a href='?page=ajout-stagiaire'>Ajouter un stagiaire</a>";