<?php 
echo '<h2>'.$personne->prenom.' ' .$personne->nom. '</h2>'; ?>
<p><a href="modifier/<?php echo $personne->id ?>">Modifier</a></p>
<p><a href="supprimer/<?php echo $personne->id ?>">Supprimer</a></p>