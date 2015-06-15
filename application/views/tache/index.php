<h2><?php echo $title ?></h2>
<a href="tache/nouveau">Créer une tache</a>
<ul>
<?php foreach ($taches as $tache): ?>

        <li><?php echo $tache->nom ?>  
        <a href="tache/<?php echo $tache->id ?>">Détail</a></li>

<?php endforeach ?>
</ul>