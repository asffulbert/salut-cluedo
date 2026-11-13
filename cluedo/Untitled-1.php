
<?php
$bdd_fichier = 'cluedo.db';	
$requete = $sqlite -> prepare($sql);
$result = $requete -> execute();
$requete -> bindValue(':piece', $piece, SQLITE3_TEXT);
?>

