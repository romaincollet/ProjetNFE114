<?php
class Utilisateur_model extends CI_Model {

	public function __construct() {

	}
	
	public function get_utilisateur($login = FALSE) {
		//Si aucun login n'est renseigné je récupère toutes les utilisateurs
		if ($login === FALSE)
		{
			$utilisateur = R::findAll( 'utilisateur' ); 
		}
		else {
			$utilisateur = R::findOne( 'utilisateur', ' login = :login ', [ ':login'=>$login ] );
		}
		return $utilisateur;
	}

	public function search_utilisateur($login) {
		
		$utilisateur = R::find( 'utilisateur', ' login LIKE :login ', [ ':login'=>'%'.$login.'%' ] );

		return $utilisateur;
	}
	
	public function set_utilisateur() {

		$utilisateur = R::dispense('utilisateur');

		$utilisateur->login = $this->input->post('login');

		$password = $this->input->post('password');
		$hash = password_hash($password,PASSWORD_BCRYPT);
		$utilisateur->password = $hash;

		$id = R::store($utilisateur);
	}

	public function update_utilisateur($utilisateur) {

		$utilisateur->login = $this->input->post('login');
		if ($this->input->post('password') !== ""){
			$password = $this->input->post('password');
			$hash = password_hash($password,PASSWORD_BCRYPT);
			$utilisateur->password = $hash;
		}
		R::store($utilisateur);
	}

	public function update_motdepasse($utilisateur) {

		$password = $this->input->post('password');
		$hash = password_hash($password,PASSWORD_BCRYPT);
		$utilisateur->password = $hash;
		
		R::store($utilisateur);
	}

	public function delete_utilisateur($id) {

		$utilisateur = $this->get_utilisateur($id);
		R::trash($utilisateur);
	}
}