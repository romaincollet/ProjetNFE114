<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('personne/nouveau') ?>
    <label for="nom">Nom</label>
    <input type="input" name="nom" />

    <label for="prenom">Prénom</label>
    <input type="input" name="prenom" /><br/>

	<label for="login">Login</label>
    <input type="input" name="login" />

	<label for="motdepasse">Mot de passe</label>
    <input type="input" name="motdepasse" /><br/>


    <input type="submit" name="submit" value="Créer la personne" />

</form>