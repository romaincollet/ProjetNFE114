<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('tache/nouveau') ?>
	<p>Le code de la tache est généré automatiquement</p><br/>
    <label for="nom">Nom de la tache</label>
    <input type="input" name="nom" /><br/>
    <label for="description">Description de la tache</label>
    <textarea name="description"></textarea><br/>

    <input type="submit" name="submit" value="Créer la tache" />

</form>