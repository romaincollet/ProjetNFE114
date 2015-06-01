<html>
<head>
	<title>{{TITLE}}</title>
</head>
<body>
  	<div style="text-align: left;">
  		<h1>Application de gestion de projet</h1>
  		<!--
  		<?php $ci = &get_instance();
  		if ($ci->authenticate == FALSE) : ?>
  		-->
	  		<ul>
	  			<li><a href="<?php echo site_url('projet'); ?>">Projets</a></li>
	  			<li><a href="<?php echo site_url('projet/recherche'); ?>">Rechercher un projet</a></li>
	  			<li><a href="<?php echo site_url('tache'); ?>">Afficher les taches</a></li>
	  			<li><a href="<?php echo site_url('tache/nouveau'); ?>">Créer une tache</a></li>
	  			<li><a href="<?php echo site_url('projet/nouveau'); ?>">Nouveau projet</a></li>
	  		</ul>
	  	<!--
		<?php endif; ?>
		-->
  	</div>
  	<hr/>
		{{BODY}}
  	<hr/>
  	<div style="text-align: right;">Collet Romain 2015</div>
</body>
</html>