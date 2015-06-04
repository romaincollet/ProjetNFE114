<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('tache/modifier/'.$tache->code) ?>
    <label for="nom">Nom</label>
    <input type="input" name="nom" value="<?php echo $tache->nom; ?>"/>

    <label for="description">Description</label>
    <textarea name="description" ><?php echo $tache->description; ?></textarea><br/>

    <input type="submit" name="submit" value="Valider les modifications" />

</form>