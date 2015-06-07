<?php
class Utilisateur_model extends CI_Model {

	public function __construct() {

	}
	
	public function get_personne($id = FALSE) {
		//Si aucun id n'est renseigné je récupère toutes les personnes
		if ($id === FALSE)
		{
			$personne = R::findAll( 'personne' ); 
		}
		else {
			$personne = R::findOne( 'personne', ' id = :id ', [ ':id'=>$id ] );
		}
		return $personne;
	}

	public function search_personne($nomPersonne) {
		
		$personne = R::find( 'personne', ' nom LIKE :nomPersonne ', [ ':nomPersonne'=>'%'.$nomPersonne.'%' ] );

		return $personne;
	}
	
	public function set_personne() {

		$personne = R::dispense('personne');

		$personne->nom = $this->input->post('nom');
		$personne->prenom = $this->input->post('prenom');

		$motdepasse = $this->input->post('motdepasse');
		$hash = password_hash($motdepasse,PASSWORD_BCRYPT);
		$personne->motdepasse = $hash;

		$id = R::store($personne);
	}

	public function update_personne($personne) {

		$personne->nom = $this->input->post('nom');
		$personne->prenom = $this->input->post('prenom');
		$personne->id = $this->input->post('id');
		if ($this->input->post('motdepasse') !== ""){
			$motdepasse = $this->input->post('motdepasse');
			$hash = password_hash($motdepasse,PASSWORD_BCRYPT);
			$personne->motdepasse = $hash;
		}
		R::store($personne);
	}
	public function delete_personne($id) {

		$personne = $this->get_personne($id);
		R::trash($personne);
	}
}