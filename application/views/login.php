<p>Saisissez votre login et votre mot de passe</p>

<div style="text-align: center">
	<?php 
	$this->load->helper('form');
	echo form_open('projet');
	echo "Login : ".form_input('login');
	echo "Mot de passe : ".form_password('password');
	echo form_submit('mysubmit', 'Connexion');
	?>
</form>
</div>