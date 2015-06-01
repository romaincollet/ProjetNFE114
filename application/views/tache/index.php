<h2><?php echo $title ?></h2>

<?php foreach ($taches as $tache): ?>

        <h3><?php echo $tache->nom ?></h3>
        <div class="main">
                <?php echo $tache->description ?>
        </div>
        <p><a href="tache/<?php echo $tache->code ?>">Voir la tache</a></p>

<?php endforeach ?>