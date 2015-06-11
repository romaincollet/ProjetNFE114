<h2><?php echo $title ?></h2>
<a href="<?php echo site_url('personne/nouveau'); ?>">Créer une personne</a>
<ul>
<?php foreach ($personnes as $personne): ?>
        
        <li><?php echo $personne->prenom . ' ' . $personne->nom ?>  <a href="personne/<?php echo $personne->id ?>">Détail</a></li>

<?php endforeach ?>
</ul>