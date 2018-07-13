<?php

echo "<h1>Ajouter une formation :</h1>
<br>
<form action='?page=ajout-formation' method='post'>

Intitulé : <input name='intitule'>
<br><br>
Date de début : <input type='date' name='datedebut'>
<br><br>
Durée en heures : <input name='duree'>
<br><br>
Module : <input name='module'>
<br><br>
Nombre de places : <input name='nbplaces'>
<br><br>
<input type='reset' value='Annuler'>
<input type='submit'>


</form>";