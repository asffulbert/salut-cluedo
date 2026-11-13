<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <nav>
      <a href="index.php?page=accueil">Accueil</a>
   <a href="index.php?page=index">Présentation</a> 
 <a href="index.php?page=?php"></a>
</nav>
      

<?php
   echo "vous etes dans l' hypothese ";
   echo "hypothèse";
   if ($_GET["untiled-1"]=="true"){
    echo "l'hypothèse est bonne";
    echo "felicitation vous avez finit le jeu";
   }
 else{
        echo "pas trouver ceci n'est pas de crime";
    }


   
