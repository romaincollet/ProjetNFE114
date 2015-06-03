<?php
class Personne_model extends CI_Model {

	public function __construct()
	{

	}
	
	public function get_personne($login = FALSE)
	{
		//Si aucun login n'est renseigné je récupère toutes les personnes
		if ($login === FALSE)
		{
			$personne = R::findAll( 'personne' ); 
		}
		else {
			$personne = R::findOne( 'personne', ' login = :login ', [ ':login'=>$login ] );
		}
		return $personne;
	}

	//TODO A refaire
	public function search_personne($nompersonne)
	{
		
		$personne = R::find( 'personne', ' nom LIKE :nomPersonne ', [ ':nomPersonne'=>'%'.$nompersonne.'%' ] );

		return $personne;
	}
	
	//TODO A refaire
	public function set_personne()
	{
		$this->load->helper('url');

		$code = url_title($this->input->post('nomPersonne'), 'dash', TRUE);

		$personne = R::dispense('personne');

		$personne->nom = $this->input->post('nomPersonne');
		$personne->code = $code;

		$id = R::store( $personne );
	}
}