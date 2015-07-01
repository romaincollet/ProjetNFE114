<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('projet/ajouterTache/'.$projet->id) ?>
<label for="tache">Liste des taches</label>
<select name="tache">

	<?php foreach ($taches as $tache): ?>
	        <option value="<?php echo $tache->id ?>"><?php echo $tache->nom ?></option>
	<?php endforeach ?>

</select>
<input type="submit" name="submit" value="Ajouter la tache" />
<?php echo form_close(); ?>
<p><a href="<?php echo site_url('projet/'.$projet->id) ?>">Retour</a></p>
