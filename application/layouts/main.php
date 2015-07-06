<html>
<head>
	<title>{{TITLE}}</title>
</head>
<body>
	<h1>Application de gestion de projet</h1>
	<?php 
		$this->load->library('session');

	if ($this->session->logged_in === true): ?>

	<div style="float:right;">
		<a href="<?php echo site_url('login/logout'); ?>">Déconnexion</a><br/>
		<a href="<?php echo site_url('login/modifier/'. $this->session->login); ?>">Modifier le mot de passse</a>
	</div>
	<div style="text-align: left;">
		<ul>
			<li><a href="<?php echo site_url('projet'); ?>">Liste des projets</a></li>
			<li><a href="<?php echo site_url('projet/nouveau'); ?>">Nouveau projet</a></li>
			<li><a href="<?php echo site_url('personne'); ?>">Liste des personnes</a></li>
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
	<?php endif; ?>
	<hr/>
	{{BODY}}
	<hr/>
	<div style="text-align: right;">Collet Romain 2015</div>
</body>
</html>