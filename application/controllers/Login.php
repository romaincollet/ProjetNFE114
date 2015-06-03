<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
  
  public function __construct() {
    parent::__construct();
    $this->authenticate = FALSE;
  }
  
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	public function authentification()
	{
		$this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Créer un nouveau projet';

        $this->form_validation->set_rules('nomProjet', 'nom du projet', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->title = "Création d'un projet";
            $this->load->view('login', $data);
        }
        else
        {
            $this->Projet_model->set_projet();
            $data['projets'] = $this->Projet_model->get_projet();
            $this->load->view('projet/index', $data);
        }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */