<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('projet/ajouterEquipier/'.$projet->id) ?>
<label for="equipier">Liste des équipiers</label>
<select name="equipier">

	<?php foreach ($personnes as $personne): ?>
	        <option value="<?php echo $personne->id ?>"><?php echo $personne->prenom ." ". $personne->nom ;?></option>
	<?php endforeach ?>

</select>
<input type="submit" name="submit" value="Ajouter l'équipier" />
<?php echo form_close(); ?>
