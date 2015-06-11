<?php echo '<h2>'.$projet->nom.'</h2>';
echo '<p>'.$projet->description.'</p>'; ?>
<p><a href="ajouterTache/<?php echo $projet->id ?>">Ajouter une tache</a></p>
<p><a href="listeEquipier/<?php echo $projet->id ?>">Liste des équipiers</a></p>
<p><a href="modifier/<?php echo $projet->id ?>">Modifier</a></p>
<p><a href="supprimer/<?php echo $projet->id ?>">Supprimer</a></p>