<h2><?php echo $title ?></h2>

<a href="<?php echo site_url('tache/nouveau/'.$projet->id) ;?>">Ajouter une tache</a>

<ul>
<?php foreach ($taches as $tache): ?>

        <li><?php echo $tache->nom ?>
        <a href="<?php echo site_url('tache/'.$tache->id)  ;?>">Détail</a>

<?php endforeach ?>
</ul>

<p><a href="<?php echo site_url('projet/'.$projet->id) ?>">Retour</a></p>