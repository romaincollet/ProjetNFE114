<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('tache/nouveau') ?>
	<p>Le code de la tache est généré automatiquement</p><br/>
    <label for="nomTache">Nom de la tache</label>
    <input type="input" name="nomTache" /><br/>
    <label for="descriptionTache">Description de la tache</label>
    <textarea name="descriptionTache"></textarea><br/>

    <input type="submit" name="submit" value="Créer la tache" />

</form>