<?php 
            
    $result = $mysqli->query('SELECT ville_id, ville_nom FROM villes');

    while($row = $result->fetch_array()) {
        $villes[$row['ville_id']] = $row['ville_nom'];
    }
?>
<ul>
        <?php foreach($villes as $id => $ville) { ?>
            <li><a href="ville.php?id=<?php echo $id?>"><?php echo $ville?></a> - <a href="edition.php?id=<?php echo $id ?>">[editer]</a> - <a href="suppression.php?id=<?php echo $id ?>">[supprimer]</a></li>
        <?php }?>
</ul>