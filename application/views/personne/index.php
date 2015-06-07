<h2><?php echo $title ?></h2>
<a href="<?php echo site_url('personne/nouveau'); ?>">Créer une personne</a>
<?php foreach ($personnes as $personne): ?>

        <h3><?php echo $personne->prenom . ' ' . $personne->nom ?></h3>
        
        <p><a href="personne/<?php echo $personne->id ?>">Voir la personne</a></p>

<?php endforeach ?>