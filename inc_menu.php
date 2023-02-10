<?php 
            
    $result = $mysqli->query('SELECT ville_id, ville_nom FROM villes');

    while($row = $result->fetch_array()) {
        $villes[$row['ville_id']] = $row['ville_nom'];
    }
?>
<ul>
    <li><a href="index.php">Accueil</a></li>
        <?php foreach($villes as $id => $ville) { ?>
            <li><a href="ville.php?id=<?php echo $id?>"><?php echo $ville?></a></li>
        <?php }?>
</ul>