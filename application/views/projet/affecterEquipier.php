<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('projet/affecterEquipier/'.$projet->id) ?>
<label for="equipier">Liste des équipiers</label>
<select name="equipier">

	<?php foreach ($equipiers as $equipier): ?>
	        <option value="<?php echo $equipier->id ?>"><?php echo $equipier->prenom ." ". $equipier->nom ;?></option>
	<?php endforeach ?>

</select>
<br/>
<label for="tache">Liste des taches</label>
<select name="tache">

	<?php foreach ($taches as $tache): ?>
	        <option value="<?php echo $tache->id ?>"><?php echo $tache->nom ?></option>
	<?php endforeach ?>

</select>
<br/>
<input type="submit" name="submit" value="Affecter l'équipier à la tache" />
<?php echo form_close(); ?>
<p><a href="<?php echo site_url('projet/'.$projet->id) ?>">Retour</a></p>