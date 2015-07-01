<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('projet/supprimer/'.$projet->id) ?>
    <label for="check">Cocher la case pour valider la suppression du projet</label>
    <input type="checkbox" name="check" />

    <input type="submit" name="submit" value="Supprimer le projet" />

</form>
<p><a href="<?php echo site_url('projet/'.$projet->id) ?>">Annuler</a></p>