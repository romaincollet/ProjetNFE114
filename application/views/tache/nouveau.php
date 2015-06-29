<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('tache/nouveau') ?>
	
    <label for="nom">Nom de la tache</label>
    <input type="input" name="nom" />

    <label for="description">Description de la tache</label>
    <textarea name="description"></textarea><br/>

    <label for="duree">Durée de la tache (en jours)</label>
    <input type="input" name="duree"></input><br/>

    <input type="submit" name="submit" value="Créer la tache" />

</form>