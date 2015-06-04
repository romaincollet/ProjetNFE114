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

    public function view($code = NULL)
    {
        $data['projet'] = $this->Projet_model->get_projet($code);
        
        if (empty($data['projet']))
        {
            show_404();
        }

        $this->load->view('projet/view', $data);
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
        $this->form_validation->set_rules('description', 'prénom', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->title = "Création d'un projet";
            $this->load->view('projet/nouveau', $data);
        }
        else
        {
            $this->Projet_model->set_projet();
            redirect(site_url('projet'));
        }
    }

    public function modifier($code) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Modifier un projet';
        $projet = $this->Projet_model->get_projet($code);
        $data['projet'] = $projet;

        $this->form_validation->set_rules('nom', 'nom', 'required');
        $this->form_validation->set_rules('description', 'prénom', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->title = "Modifier d'une projet";
            $this->load->view('projet/modifier', $data);
        }
        else
        {
            $this->Projet_model->update_projet($projet);
            redirect(site_url('projet'));
        }
    }

    public function supprimer($code) {
        $this->Projet_model->delete_projet($code);
        redirect(site_url('projet'));
    }
}