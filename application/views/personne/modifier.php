<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('personne/modifier/'.$personne->id) ?>
    <label for="nom">Nom</label>
    <input type="input" name="nom" value="<?php echo $personne->nom; ?>"/>

    <label for="prenom">Prénom</label>
    <input type="input" name="prenom" value="<?php echo $personne->prenom; ?>"/><br/>

    <input type="submit" name="submit" value="Valider les modifications" />

</form>