<?php
echo '<h2>'.$personne->prenom.' ' .$personne->nom. '</h2>';
echo '<p> Login : '.$personne->login.'</p>'; ?>
<p><a href="modifier/<?php echo $personne->login ?>">Modifier</a></p>
<p><a href="supprimer/<?php echo $personne->login ?>">Supprimer</a></p>