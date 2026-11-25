<?php
$sqlite = new SQLite3('cluedo.db');

// Les informations de l'hypothèse sont transmises par l'URL.
$d = [
    'nom_personnage' => $_GET['nom_personnage'] ?? 'personnage choisi',
    'nom_piece' => $_GET['nom_piece'] ?? 'pièce choisie',
];
$url_retour = $_GET['url_retour'] ?? 'cluedo.html';
$hypothese_bonne = isset($_GET['untiled-4']) && $_GET['untiled-4'] === 'true';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Votre hypothèse</title>
</head>
<body>
    <h1>Hypothèse</h1>

    <?php if ($hypothese_bonne): ?>
        <p>L'hypothèse est bonne ! Tu as resolu le crime !</p>
        <p><a href="index.php?recommencer=1">Rejouer une partie</a></p>
        <p><a href="cluedo.html">Retour a l'accueil</a></p>
    <?php else: ?>
        <?php
        $faux = [];
        $faux[] = 'le personnage ' . $d['nom_personnage'] . ' n\'est pas le meurtrier';
        $faux[] = 'la piece ' . $d['nom_piece'] . ' n\'est pas le lieu du crime';
        $indice = $faux[array_rand($faux)];
        ?>
        <p><?php echo htmlspecialchars($indice, ENT_QUOTES, 'UTF-8'); ?></p>
        <p><a href="<?php echo htmlspecialchars($url_retour, ENT_QUOTES, 'UTF-8'); ?>">Retourner dans la piece</a></p>
    <?php endif; ?>
</body>
</html>
<?php
$sqlite->close();
?>
