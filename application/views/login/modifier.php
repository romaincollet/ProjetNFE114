<h2><?php echo $title ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('login/modifier/'.$utilisateur->login) ?>
    <label for="password">Mot de passe</label>
    <input type="password" name="password"/><br/>
    <label for="password2">Confirmation du mot de passe</label>
    <input type="password" name="password2"/><br/>

    <input type="submit" name="submit" value="Valider les modifications" />

</form>