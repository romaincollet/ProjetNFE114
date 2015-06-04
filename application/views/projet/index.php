<h2><?php echo $title ?></h2>

<?php foreach ($projets as $projet): ?>

        <h3><?php echo $projet->nom ?></h3>
        <div class="main">
                <?php echo $projet->description ?>
        </div>
        <p><a href="projet/<?php echo $projet->code ?>">Voir le projet</a></p>

<?php endforeach ?>