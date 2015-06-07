<?php echo '<h2>'.$tache->nom.'</h2>';
echo '<p>'.$tache->description.'</p>'; ?>
<p><a href="modifier/<?php echo $tache->id ?>">Modifier</a></p>
<p><a href="supprimer/<?php echo $tache->id ?>">Supprimer</a></p>