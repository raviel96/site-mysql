<?php require('inc_connexion.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(isset($_POST['submit_form'])) {
            $ville_nom = $_POST['ville_nom'];
            $ville_text = $_POST['ville_text'];

            if(empty($ville_nom) OR empty($ville_text)) {
                $message = '<p class="error">Vous devez saisir le nom d\'une ville et sa présentation</p>';
            } else {
                $result = $mysqli->query('SELECT count(ville_id) FROM villes WHERE ville_nom = "'.$ville_nom.'"');
                $row = $result->fetch_array();

                if($row[0] > 0){
                    $message = '<p class="error">La ville est déjà enregristrée</p>';
                }else {
                    if($mysqli->query('INSERT INTO villes (ville_nom, ville_text) VALUES ("'.$ville_nom.'", "'.$ville_text.'")')) {
                        $message = '<p class="message">L\'ajout de la ville '.$ville_nom.' est effectué</p>';
                    } else {
                        $message = '<p class="message">L\'ajout de la ville '.$ville_nom.'n\'est pas effectué</p>';
                    }
                }      
            }

            
        }
    ?>
    <div>
        <h1>Ajouter une ville</h1>
        <?php if(isset($message)) echo $message ?>
        <form method="post"></form>
        <p>Nom de la ville : <input type="text" name="ville_nom"></p>
        <p>Texte de présentation <br>
            <textarea name="ville_text" cols="32" rows="8"></textarea>
        </p>
        <p><input type="submit" name="submit_form" value="valider"></p>
    </div>
</body>
</html>