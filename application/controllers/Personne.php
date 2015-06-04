<?php
class Personne extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Personne_model');
    }

    public function index() {
        $data['personnes'] = $this->Personne_model->get_personne();
        $data['title'] = "Liste des personnes";

        $this->load->view('personne/index', $data);
        
    }

    public function view($login = NULL)
    {
        $data['personne'] = $this->Personne_model->get_personne($login);
        
        if (empty($data['personne']))
        {
            show_404();
        }

        $this->load->view('personne/view', $data);
    }

    public function recherche() {

        $data['personnes'] = $this->Personne_model->search_personne($this->input->post('nomPersonne'));
        $data['title'] = "Liste des personnes dont le nom contient : " . $this->input->post('nomPersonne');

        $this->load->view('personne/index', $data);
    }

    public function nouveau() {
    	$this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Créer une nouvelle personne';

        $this->form_validation->set_rules('nom', 'nom', 'required');
        $this->form_validation->set_rules('prenom', 'prénom', 'required');
        $this->form_validation->set_rules('login', 'login', 'required');
        $this->form_validation->set_rules('motdepasse', 'mot de passe', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->title = "Création d'une personne";
            $this->load->view('personne/nouveau', $data);
        }
        else
        {
            $this->Personne_model->set_personne();
            redirect(site_url('personne'));
        }
    }

    public function modifier($login) {
    	$this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Modifier une personne';
        $personne = $this->Personne_model->get_personne($login);
        $data['personne'] = $personne;

        $this->form_validation->set_rules('nom', 'nom', 'required');
        $this->form_validation->set_rules('prenom', 'prénom', 'required');
        $this->form_validation->set_rules('login', 'login', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->title = "Modifier d'une personne";
            $this->load->view('personne/modifier', $data);
        }
        else
        {
            $this->Personne_model->update_personne($personne);
            redirect(site_url('personne'));
        }
    }

    public function supprimer($login) {
    	$this->Personne_model->delete_personne($login);
        redirect(site_url('personne'));
    }
}