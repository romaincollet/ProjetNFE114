<?php
echo '<h2>'.$personne->prenom.' ' .$personne->nom. '</h2>'; ?>
<p><a href="modifier/<?php echo $personne->id ?>">Modifier</a></p>
<p><a href="supprimer/<?php echo $personne->id ?>">Supprimer</a></p>
<?php if ($personne->projet_id <> ""): ?>
	<p><a href="<?php echo site_url('projet/'.$personne->projet_id) ?>">Afficher le projet</a></p>
<?php endif; ?>