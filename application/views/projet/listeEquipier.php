<h2><?php echo $title ?></h2>
<a href="<?php echo site_url('projet/ajouterEquipier/'.$projet->id) ;?>">Ajouter des équipiers</a>
<ul>

<?php foreach ($equipiers as $equipier): ?>

        <li><?php echo $equipier->prenom . ' ' . $equipier->nom ?>
        
        <a href="<?php echo site_url('projet/retirerEquipier/'.$equipier->id)  ;?>">Retirer l'équipier</a></li>

<?php endforeach ?>
</ul>
<p><a href="<?php echo site_url('projet/'.$projet->id) ?>">Retour</a></p>