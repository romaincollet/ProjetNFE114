<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('tache/supprimer/'.$tache->id) ?>
    <label for="check">Cocher la case pour valider la suppression de la tache</label>
    <input type="checkbox" name="check" />

    <input type="submit" name="submit" value="Supprimer la tache" />

</form>
<p><a href="<?php echo site_url('tache/'.$tache->id) ?>">Annuler</a></p>