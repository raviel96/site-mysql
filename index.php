<?php require('inc_connexion.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Accueil</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Accueil</h1>
            <p>Bienvenu sur le mini-site consacré aux villes</p>
            <p>Ce site utilise PHP et MySQL</p>
            <p>Utiliser le menu de navigation pour consulter les pages du site</p>
            <p>Bonne visite !</p>
        </div>
        <?php require('inc_menu.php')?>
        <?php require('inc_footer.php')?>
    </div>
</body>
</html>