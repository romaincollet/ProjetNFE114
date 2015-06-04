<?php echo '<h2>'.$projet->nom.'</h2>';
echo '<p>'.$projet->description.'</p>'; ?>
<p><a href="modifier/<?php echo $projet->code ?>">Modifier</a></p>
<p><a href="supprimer/<?php echo $projet->code ?>">Supprimer</a></p>