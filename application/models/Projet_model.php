<?php
class Projet_model extends CI_Model {

    public function __construct()
    {
            
    }
	
	public function get_projet($code = FALSE)
	{
		if ($code === FALSE)
		{
			$projet = R::findAll( 'projet' ); //reloads our book
		}
		else {
			$projet = R::findOne( 'projet', ' code = :code ', [ ':code'=>$code ] );
		}
		return $projet;
	}
	public function search_projet($nomProjet)
	{
		
		$projet = R::find( 'projet', ' nom LIKE :nomProjet ', [ ':nomProjet'=>'%'.$nomProjet.'%' ] );

		return $projet;
	}
	
	public function set_projet()
	{
		$this->load->helper('url');

		$code = url_title($this->input->post('nomProjet'), 'dash', TRUE);

		$projet = R::dispense('projet');

		$projet->nom = $this->input->post('nomProjet');
		$projet->code = $code;
		$projet->description = $this->input->post('description');

		$id = R::store( $projet );
	}

	public function update_projet($projet) {
		$code = url_title($this->input->post('nom'), 'dash', TRUE);

		$projet->nom = $this->input->post('nom');
		$projet->code = $code;
		$projet->description = $this->input->post('description');

		R::store($projet);
	}
	public function delete_projet($code) {

		$projet = $this->get_projet($code);
		R::trash($projet);
	}
}