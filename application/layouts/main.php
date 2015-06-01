<html>
<head>
	<title>{{TITLE}}</title>
</head>
<body>
  	<div style="text-align: left;">
  		<h1>Application de gestion de projet</h1>
	  		<ul>
	  			<li><a href="<?php echo site_url('projet'); ?>">Projets</a></li>
	  			<li><a href="<?php echo site_url('tache'); ?>">Afficher les taches</a></li>
	  			<li><a href="<?php echo site_url('tache/nouveau'); ?>">Créer une tache</a></li>
	  			<li><a href="<?php echo site_url('projet/nouveau'); ?>">Nouveau projet</a></li>
	  		</ul>
  	</div>
  	<div>
	  		<?php echo form_open('projet/recherche') ?>
		    <label for="nomProjet">Nom du projet</label>
		    <input type="input" name="nomProjet" />

		    <input type="submit" name="submit" value="Rechercher un projet" />

		</form>
	</div>
  	<hr/>
		{{BODY}}
  	<hr/>
  	<div style="text-align: right;">Collet Romain 2015</div>
</body>
</html>