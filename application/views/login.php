<p>Saisissez votre login et votre mot de passe</p>

<div style="text-align: center">
	<?php echo validation_errors(); ?>
	<?php 
	$this->load->helper('form');
	echo form_open('login');
	echo "Login : ".form_input('login');
	echo "Mot de passe : ".form_password('password');
	echo form_submit('mysubmit', 'Connexion');
	?>
</form>
</div>