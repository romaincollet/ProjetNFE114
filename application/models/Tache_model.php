<?php
class Tache_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
	
	public function get_tache($code = FALSE)
	{
		if ($code === FALSE)
		{
			$taches = R::findAll( 'tache' ); 
		}
		else {
			$taches = R::findOne( 'tache', ' code = :code ', [ ':code'=>$code ] );
		}

		return $taches;
	}
	
	public function set_tache()
	{
		$this->load->helper('url');

		$code = url_title($this->input->post('nom'), 'dash', TRUE);

		$tache = R::dispense('tache');

		$tache->nom = $this->input->post('nom');
		$tache->code = $code;
		$tache->description = $this->input->post('description');

		$id = R::store( $tache );
	}

	public function update_tache($tache) {
		$code = url_title($this->input->post('nom'), 'dash', TRUE);

		$tache->nom = $this->input->post('nom');
		$tache->code = $code;
		$tache->description = $this->input->post('description');

		R::store($tache);
	}
	public function delete_tache($code) {

		$tache = $this->get_tache($code);
		R::trash($tache);
	}
}