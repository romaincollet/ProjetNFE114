
INSERT INTO ProjetNFE114.projet(nom, descrition)VALUES('Mon premier projet', 'Un projet super g�nial');
INSERT INTO ProjetNFE114.projet(nom, descrition)VALUES('Mon deuxi�me projet', 'Un projet encore plus g�nial');

INSERT INTO ProjetNFE114.personne(nom,prenom,projet_id)VALUES('Collet', 'Romain', 1);
INSERT INTO ProjetNFE114.personne(nom,prenom,projet_id)VALUES('Fournier', 'Fabien', 1);
INSERT INTO ProjetNFE114.personne(nom,prenom,projet_id)VALUES('Collet', 'Romain', 1);
INSERT INTO ProjetNFE114.personne(nom,prenom,projet_id)VALUES('Hubner', 'Jerôme', 1);
INSERT INTO ProjetNFE114.personne(nom,prenom,projet_id)VALUES('Lainé', 'Alexandre', 1);
INSERT INTO ProjetNFE114.personne(nom,prenom)VALUES('Kenobi', 'Obi-Wan');
INSERT INTO ProjetNFE114.personne(nom,prenom)VALUES('Skywalker', 'Anakin');
INSERT INTO ProjetNFE114.personne(nom,prenom)VALUES('Tano', 'Ashoka');
INSERT INTO ProjetNFE114.personne(nom,prenom)VALUES('Koon', 'Plo');
INSERT INTO ProjetNFE114.personne(nom,prenom)VALUES('Windu', 'Mace');

INSERT INTO ProjetNFE114.tache(nom, descrition, duree, projet_id)VALUES('Tache 1', 'Premi�re �tape',5,1);
INSERT INTO ProjetNFE114.tache(nom, descrition, duree, projet_id)VALUES('Tache 2', 'Deuxi�me �tape',2,1);
INSERT INTO ProjetNFE114.tache(nom, descrition, duree, projet_id)VALUES('Tache 3', 'Troisi�me �tape',4,1);
INSERT INTO ProjetNFE114.tache(nom, descrition, duree, projet_id)VALUES('Tache 4', 'Quatri�me �tape',8,1);
INSERT INTO ProjetNFE114.tache(nom, descrition, duree, projet_id)VALUES('Faire du css', 'Passionnant -_-',7,2);
INSERT INTO ProjetNFE114.tache(nom, descrition, duree, projet_id)VALUES('Faire la mise en page', 'Si on a le temps',6,2);
INSERT INTO ProjetNFE114.tache(nom, descrition, duree, projet_id)VALUES('Rendre le projet', 'Dans les temps',3,2);

INSERT INTO ProjetNFE114.utilisateur(login, password) VALUES ('rcollet', 'test');
INSERT INTO ProjetNFE114.utilisateur(login, password) VALUES ('alaine', 'test');
INSERT INTO ProjetNFE114.utilisateur(login, password) VALUES ('jhubner', 'test');


INSERT INTO ProjetNFE114.personne_tache(id,personne_id,tache_id)VALUES(1,1);
INSERT INTO ProjetNFE114.personne_tache(id,personne_id,tache_id)VALUES(2,2);
INSERT INTO ProjetNFE114.personne_tache(id,personne_id,tache_id)VALUES(3,2);
INSERT INTO ProjetNFE114.personne_tache(id,personne_id,tache_id)VALUES(4,3);
INSERT INTO ProjetNFE114.personne_tache(id,personne_id,tache_id)VALUES(5,4);
