<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('projet/nouveau') ?>
    <label for="nomProjet">Nom du projet</label>
    <input type="input" name="nomProjet" />

    <label for="description">Description</label>
    <textarea name="description"></textarea><br/>

    <input type="submit" name="submit" value="Créer le projet" />

</form>
<p><a href="<?php echo site_url('projet') ?>">Retour</a></p>