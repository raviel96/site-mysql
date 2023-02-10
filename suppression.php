<?php require('inc_connexion.php')?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php 
        $id = $_GET['id'];

        if($mysqli->query('DELETE FROM villes WHERE ville_id = '.$id)) {
            $message = '<p class"message">La ville a bien été supprimée dans la base.<br><a href="liste.php">Accéder à la liste des villes</a></p>';
        } else {
            $message = '<p class="error">Erreur de la suppression.</p>';
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression</title>
</head>
<body>
    <div>
        <?php echo $message ?>
    </div>
</body>
</html>