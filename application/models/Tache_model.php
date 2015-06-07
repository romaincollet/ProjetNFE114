<?php
class Tache_model extends CI_Model {

    public function __construct()
    {
        
    }
	
	public function get_tache($id = FALSE)
	{
		if ($id === FALSE)
		{
			$taches = R::findAll( 'tache' ); 
		}
		else {
			$taches = R::load( 'tache', $id );
		}

		return $taches;
	}
	
	public function set_tache() {

		$tache = R::dispense('tache');

		$tache->nom = $this->input->post('nom');
		$tache->description = $this->input->post('description');

		$id = R::store( $tache );
	}

	public function update_tache($tache) {

		$tache->nom = $this->input->post('nom');
		$tache->description = $this->input->post('description');

		R::store($tache);
	}
	public function delete_tache($id) {

		$tache = $this->get_tache($id);
		R::trash($tache);
	}
}