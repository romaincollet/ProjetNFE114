<h2><?php echo $title ?></h2>
<ul>
<?php foreach ($projets as $projet): ?>

        <li><?php echo $projet->nom ?>  
        <a href="projet/<?php echo $projet->id ?>">Détail</a></li>
        

<?php endforeach ?>
</ul>