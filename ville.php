<?php require('inc_connexion.php')?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php
        $id = $_GET['id'];
        $mysqli = new mysqli('localhost', 'root', '', 'projet_villes_site');
        $result = $mysqli->query('SELECT ville_id, ville_nom, ville_text FROM villes WHERE ville_id = '.$id);

        $row = $result->fetch_array();

        $nom = $row['ville_nom'];
        $text = $row['ville_text'];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Villes</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <h1><?php echo $nom?></h1>
            <p><?php echo $text?></p>
        </div>
        <?php require('inc_menu.php')?>
        <?php require('inc_footer.php')?>
    </div>
</body>
</html>