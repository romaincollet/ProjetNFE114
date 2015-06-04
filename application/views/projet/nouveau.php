<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('projet/nouveau') ?>
	<p>Le code du projet est généré automatiquement</p><br/>
    <label for="nomProjet">Nom du projet</label>
    <input type="input" name="nomProjet" /><br/>

    <label for="description">Description</label>
    <textarea name="description"></textarea><br/>

    <input type="submit" name="submit" value="Créer le projet" />

</form>