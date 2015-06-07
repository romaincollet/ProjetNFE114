<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('projet/modifier/'.$projet->id) ?>
    <label for="nom">Nom</label>
    <input type="input" name="nom" value="<?php echo $projet->nom; ?>"/>

    <label for="description">Description</label>
    <textarea name="description" ><?php echo $projet->description; ?></textarea><br/>

    <input type="submit" name="submit" value="Valider les modifications" />

</form>