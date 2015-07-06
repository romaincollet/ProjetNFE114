<?php echo '<h2>'.$tache->nom.'</h2>';
echo '<p>Durée de la tache : '.$tache->duree.' jour(s)</p>';
echo '<p>Description : '.$tache->description.'</p>'; ?>

<h3>Equipiers affectés</h3>

<ul>
<?php foreach ($equipiers as $equipier): ?>
        <li><?php echo $equipier->prenom . ' ' . $equipier->nom ?>  <a href="<?php echo site_url('personne/'.$equipier->id) ?>">Détail</a></li>
<?php endforeach ?>
</ul>

<?php echo validation_errors(); ?>

<?php echo form_open('tache/'.$tache->id) ?>

<label for="equipier">Liste des équipiers disponibles</label>
<select name="equipier" width="100px">
	<option value=""></option>
	<?php foreach ($equipiersDispo as $equipier): ?>
	        <option value="<?php echo $equipier->id ?>"><?php echo $equipier->prenom ." ". $equipier->nom ;?></option>
	<?php endforeach ?>

</select>

<input type="submit" name="submit" value="Affecter l'équipier cette tache" />
<?php echo form_close(); ?>

<p><a href="modifier/<?php echo $tache->id ?>">Modifier</a></p>
<p><a href="supprimer/<?php echo $tache->id ?>">Supprimer</a></p>
<p><a href="<?php echo site_url('projet/listeTache/'.$tache->projet_id) ?>">Retour à la liste des tâches</a></p>