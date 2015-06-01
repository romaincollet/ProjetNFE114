<?php
class Projet extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Projet_model');
        }

	public function index() {

                $data['projets'] = $this->Projet_model->get_projet();
                $data['title'] = "Liste des projets";

                $this->load->view('projet/index', $data);
        
        }

        public function recherche() {

                $data['projets'] = $this->Projet_model->search_projet($this->input->post('nomProjet'));
                $data['title'] = "Liste des projets dont le nom contient : " . $this->input->post('nomProjet');

                $this->load->view('projet/index', $data);
        }

        public function nouveau() {
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Créer un nouveau projet';

                $this->form_validation->set_rules('nomProjet', 'nom du projet', 'required');

                if ($this->form_validation->run() === FALSE)
                {
                        $this->title = "Création d'un projet";
                        $this->load->view('projet/nouveau', $data);
                }
                else
                {
                        $this->Projet_model->set_projet();
                        $data['projets'] = $this->Projet_model->get_projet();
                        $this->load->view('projet/index', $data);
                }
        }

        public function view($code = NULL)
        {
                $data['projet'] = $this->Projet_model->get_projet($code);
                
                if (empty($data['projet']))
                {
                        show_404();
                }

                $this->load->view('projet/view', $data);
        }
}