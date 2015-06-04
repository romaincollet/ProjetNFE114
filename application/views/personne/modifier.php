<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('personne/modifier/'.$personne->login) ?>
    <label for="nom">Nom</label>
    <input type="input" name="nom" value="<?php echo $personne->nom; ?>"/>

    <label for="prenom">Prénom</label>
    <input type="input" name="prenom" value="<?php echo $personne->prenom; ?>"/><br/>

	<label for="login">Login</label>
    <input type="input" name="login" value="<?php echo $personne->login; ?>"/>

	<label for="motdepasse">Mot de passe</label>
    <input type="input" name="motdepasse" /><br/>
    <p>Si vous ne voulez pas modifier le mot de passe, laissez la case vide.</p><br/>

    <input type="submit" name="submit" value="Valider les modifications" />

</form>