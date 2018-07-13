<?php

echo "<hr>
<h1>Ajouter un stagiaire :</h1>

<br>

<form action='?page=ajout-stagiaire' method='post'>

Nom : <input>
<br><br>
Prénom : <input>
<br><br>
Sexe : <select id='monselect'>
        <option></option>
        <option value='M'>Masculin</option> 
        <option value='F'>Féminin</option>

</select>
<br><br>
Ville : <input>
<br><br>
Mail : <input type='email'>
<br><br>
Téléphone : <input>
<br><br>
<input type='reset' value='Annuler'>
<input type='submit'>

</form>";