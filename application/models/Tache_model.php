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

		$code = url_title($this->input->post('nomTache'), 'dash', TRUE);

		$tache = R::dispense('tache');

		$tache->nom = $this->input->post('nomTache');
		$tache->code = $code;
		$tache->description = $this->input->post('descriptionTache');

		$id = R::store( $tache );
	}
}