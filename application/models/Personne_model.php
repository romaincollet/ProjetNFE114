<?php
class Personne_model extends CI_Model {

	public function __construct() {

	}
	
	public function get_personne($id = FALSE) {
		//Si aucun id n'est renseigné je récupère toutes les personnes
		if ($id === FALSE)
		{
			$personne = R::findAll( 'personne' ); 
		}
		else {
			$personne = R::load( 'personne', $id );
		}
		return $personne;
	}

	public function get_personne_sans_projet($id = FALSE) {
		
		$taches = R::find( 'personne', ' projet_id IS NULL' );

		return $taches;
	}

	public function search_personne($nomPersonne) {
		
		$personne = R::find( 'personne', ' nom LIKE :nomPersonne OR prenom LIKE :nomPersonne', [ ':nomPersonne'=>'%'.$nomPersonne.'%' ] );

		return $personne;
	}
	
	public function set_personne() {

		$personne = R::dispense('personne');

		$personne->nom = $this->input->post('nom');
		$personne->prenom = $this->input->post('prenom');

		$id = R::store($personne);
	}

	public function update_personne($personne) {

		$personne->nom = $this->input->post('nom');
		$personne->prenom = $this->input->post('prenom');
		R::store($personne);
	}
	public function delete_personne($id) {

		$personne = $this->get_personne($id);
		R::trash($personne);
	}
}