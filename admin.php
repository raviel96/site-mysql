<?php require('inc_connexion.php')?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Administration</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Administration du mini-site des villes</h1>
            <p>L'administration du site vous permet d'ajouter une nouvelle ville au site ou de modifier ou supprimer une ville existante</p>
            <p>List des villes :</p>
            <?php require('liste.php')?>
            <?php require('inc_footer.php')?>
        </div>
        <div>
            <ul>
                <li><a href="#">Accueil administration</a></li>
                <li><a href="ajout.php">Ajouter une ville</a></li>
                <li><a href="index.php">Voir le site</a></li>
            </ul>
        </div>
    </div>
</body>
</html>