<?php
class Tache extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Tache_model');
        }

	public function index() {
                $data['taches'] = $this->Tache_model->get_tache();
        	$data['title'] = "Liste des taches";

        	$this->load->view('tache/index', $data);
        }

        public function nouveau() {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Créer une nouvelle tache';

                $this->form_validation->set_rules('nomTache', 'nom de la tache', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                        $this->title = "Création d'une tache";
                        $this->load->view('tache/nouveau', $data);
                }
                else
                {
                        $this->Tache_model->set_tache();
                        $data['taches'] = $this->Tache_model->get_tache();
                        $this->load->view('tache/index', $data);
                }
        }

        public function view($code = NULL)
        {
                $data['tache'] = $this->Tache_model->get_tache($code);
                
                if (empty($data['tache']))
                {
                        show_404();
                }

                $this->load->view('tache/view', $data);
        }
}