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
	
	public function set_tache($projet) {

		$tache = R::dispense('tache');

		$tache->nom = $this->input->post('nom');
		$tache->description = $this->input->post('description');
		$tache->duree = $this->input->post('duree');

		$projet->ownTacheList[] = $tache;

		$id = R::store( $tache );
		R::store($projet);
	}

	public function update_tache($tache) {

		$tache->nom = $this->input->post('nom');
		$tache->description = $this->input->post('description');
		$tache->duree = $this->input->post('duree');

		R::store($tache);
	}
	public function delete_tache($id) {

		$tache = $this->get_tache($id);
		R::trash($tache);
	}
}