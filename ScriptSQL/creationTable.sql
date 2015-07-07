use ProjetNFE114;

CREATE TABLE `projet` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `utilisateur` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `personne` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `prenom` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `projet_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_foreignkey_personne_projet` (`projet_id`),
  CONSTRAINT `c_fk_personne_projet_id` FOREIGN KEY (`projet_id`) REFERENCES `projet` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `tache` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projet_id` int(11) unsigned DEFAULT NULL,
  `duree` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `index_foreignkey_tache_projet` (`projet_id`),
  CONSTRAINT `c_fk_tache_projet_id` FOREIGN KEY (`projet_id`) REFERENCES `projet` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `personne_tache` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `personne_id` int(11) unsigned NOT NULL,
  `tache_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UQ_personne_tache` (`personne_id`,`tache_id`),
  KEY `index_foreignkey_personne_tache_personne` (`personne_id`),
  KEY `index_foreignkey_personne_tache_tache` (`tache_id`),
  CONSTRAINT `c_fk_personne_tache_tache_id` FOREIGN KEY (`tache_id`) REFERENCES `tache` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `c_fk_personne_tache_personne_id` FOREIGN KEY (`personne_id`) REFERENCES `personne` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
