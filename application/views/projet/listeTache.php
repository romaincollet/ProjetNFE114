<h2><?php echo $title ?></h2>
<a href="<?php echo site_url('projet/ajouterTache/'.$projet->id) ;?>">Ajouter des taches</a>
<ul>

<?php foreach ($taches as $tache): ?>

        <li><?php echo $tache->nom ?>
        <a href="<?php echo site_url('tache/'.$tache->id)  ;?>">Détail</a>
        <a href="<?php echo site_url('projet/retirerTache/'.$tache->id)  ;?>">Retirer la tache</a></li>

<?php endforeach ?>
</ul>
<p><a href="<?php echo site_url('projet/'.$projet->id) ?>">Retour</a></p>