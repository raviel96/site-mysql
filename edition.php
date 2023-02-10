<?php require('inc_connexion.php') ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editer</title>
</head>
<body>
    <?php 
        if(isset($_POST['submit_form'])) {
            $ville_nom = $_POST['ville_nom'];
            $ville_text = $_POST['ville_text'];
            $ville_id = $_POST['ville_id'];

            if((empty($ville_nom)) OR (empty($ville_text))) {
                $message = '<p class="error">Vous devez saisir le nom d\'une ville et sa présentation</p>';
            } else {
                if($mysqli->query('UPDATE villes SET ville_nom = "'.$ville_nom.'", ville_text = "'.$ville_text.'" WHERE ville_id = "'.$ville_id.'"')) {
                    $message = '<p class="message">La mise à jour de la ville '.$ville_nom.' est effectuée</p>';
                } else {
                    $message = '<p class="error">La mise à jour de la ville '.$ville_nom.' n\'est pas effectuée</p>';
                }
            }
        }
    
        $id = $_GET['id'];

        $result = $mysqli->query('SELECT ville_id, ville_nom, ville_text FROM villes WHERE ville_id = '.$id);

        $row = $result->fetch_array();
        $nom = $row['ville_nom'];
        $text = $row['ville_text'];
    ?>
    <div>
        <h1>Ajouter une ville</h1>
        <?php if(isset($message)) echo $message?>
        <form method="post"></form>
        <p>Nom de la ville : <input type="text" name="ville_nom" value="<?php echo $nom?>"></p>
        <p>Texte de présentation <br>
            <textarea name="ville_text" cols="32" rows="8"><?php echo $text?></textarea>
        </p>
        <input type="hidden" name="ville_id" value="<?php echo $id?>">
        <p><input type="submit" name="submit_form" value="valider"></p>
    </div>
</body>
</html>