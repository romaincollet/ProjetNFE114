<?php
class Projet_model extends CI_Model {

    public function __construct()
    {
            
    }
	
	public function get_projet($id = FALSE) {

		if ($id === FALSE)
		{
			$projet = R::findAll( 'projet' ); //reloads our book
		}
		else {
			$projet = R::load( 'projet', $id );
		}
		return $projet;
	}
	public function search_projet($nomProjet) {
		
		$projet = R::find( 'projet', ' nom LIKE :nomProjet ', [ ':nomProjet'=>'%'.$nomProjet.'%' ] );

		return $projet;
	}
	
	public function set_projet() {
		
		$projet = R::dispense('projet');

		$projet->nom = $this->input->post('nomProjet');
		$projet->description = $this->input->post('description');

		$id = R::store( $projet );
	}

	public function update_projet($projet) {

		$projet->nom = $this->input->post('nom');
		$projet->description = $this->input->post('description');

		R::store($projet);
	}
	public function delete_projet($id) {

		$projet = $this->get_projet($id);
		R::trash($projet);
	}

	public function ajouter_tache($projet) {

		$idTache = $this->input->post('tache');
		$tache = R::load('tache', $idTache);
		$projet->ownTacheList[] = $tache;
		R::store($projet);
	}

	public function retirer_tache($idTache) {

		$tache = R::load('tache', $idTache);
		$tache->projet = NULL;
		R::store($tache);
	}

	public function ajouter_equipier($projet) {
		$idPersonne = $this->input->post('equipier');
		$personne = R::load('personne', $idPersonne);
		$projet->ownPersonneList[] = $personne;
		R::store($projet);
	}

	public function retirer_equipier($idPersonne) {

		$personne = R::load('personne', $idPersonne);
		$personne->projet = NULL;
		R::store($personne);
	}

	public function affecter_equipier($projet, $equipier){
		$affectation->projet = $projet;
        $affectation->equipier = $equipier;
        R::store($affectation);
	}
}