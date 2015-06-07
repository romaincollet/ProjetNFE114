<h3>Ajouter une tache au projet</h3>
<select name="listeTache">

	<?php foreach ($taches as $tache): ?>
	        <option value="<?php echo $tache->id ?>"><?php echo $tache->nom ?></option>
	<?php endforeach ?>

</select>