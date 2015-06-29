<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('tache/modifier/'.$tache->id) ?>
    <label for="nom">Nom</label>
    <input type="input" name="nom" value="<?php echo $tache->nom; ?>"/>

    <label for="description">Description</label>
    <textarea name="description" ><?php echo $tache->description; ?></textarea><br/>

    <label for="duree">Durée de la tache (en jours)</label>
    <input type="input" name="duree"><?php echo $tache->duree; ?></input><br/>

    <input type="submit" name="submit" value="Valider les modifications" />

</form>