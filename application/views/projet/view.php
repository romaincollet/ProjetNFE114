<?php echo '<h2>'.$projet->nom.'</h2>';
echo '<p>'.$projet->description.'</p>'; ?>
<p><a href="listeTache/<?php echo $projet->id ?>">Liste des taches</a></p>
<p><a href="listeEquipier/<?php echo $projet->id ?>">Liste des équipiers</a></p>
<p><a href="modifier/<?php echo $projet->id ?>">Modifier</a></p>
<p><a href="supprimer/<?php echo $projet->id ?>">Supprimer</a></p>