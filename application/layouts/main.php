<html>
<head>
	<title>{{TITLE}}</title>
</head>
<body>
	<?php 
		$this->load->library('session');

	if ($this->session->logged_in === true): ?>
	<div style="float:right;">
		<a href="<?php echo site_url('login/logout'); ?>">Déconnexion</a><br/>
		<a href="<?php echo site_url('login/modifier/'. $this->session->login); ?>">Modifier le mot de passse</a>
	</div>
	<?php endif; ?>

	<div style="text-align: left;">
		<h1>Application de gestion de projet</h1>
		<ul>
			<li><a href="<?php echo site_url('projet'); ?>">Projets</a></li>
			<li><a href="<?php echo site_url('projet/nouveau'); ?>">Nouveau projet</a></li>
			<li><a href="<?php echo site_url('personne'); ?>">Afficher les personnes</a></li>
		</ul>
	</div>
	<div>
		<?php echo form_open('projet/recherche') ?>
		<label for="nomProjet">Nom du projet</label>
		<input type="input" name="nomProjet" />

		<input type="submit" name="submit" value="Rechercher un projet" />
		<?php echo form_close() ?>
	</div>
	<div>
		<?php echo form_open('personne/recherche') ?>
		<label for="nomPersonne">Nom de la personne</label>
		<input type="input" name="nomPersonne" />

		<input type="submit" name="submit" value="Rechercher une personne" />
		<?php echo form_close() ?>
	</div>
	<hr/>
	{{BODY}}
	<hr/>
	<div style="text-align: right;">Collet Romain 2015</div>
</body>
</html>