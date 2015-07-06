<?php
class Personne extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Personne_model');
    }

    public function index() {
        $data['personnes'] = $this->Personne_model->get_personne();
        $data['title'] = "Liste des personnes";

        $this->title = "Liste des personnes";
        $this->load->view('personne/index', $data);
        
    }

    public function view($id)
    {
        $personne = $this->Personne_model->get_personne($id);
        $data['personne'] = $personne;

        $this->title = $personne->prenom . " " . $personne->nom;
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

    public function modifier($id) {
    	$this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Modifier la personne';
        $personne = $this->Personne_model->get_personne($id);
        $data['personne'] = $personne;

        $this->form_validation->set_rules('nom', 'nom', 'required');
        $this->form_validation->set_rules('prenom', 'prénom', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->title = "Modifier la personne";
            $this->load->view('personne/modifier', $data);
        }
        else
        {
            $this->Personne_model->update_personne($personne);
            redirect(site_url('personne'));
        }
    }

    public function supprimer($id) {
    	$this->Personne_model->delete_personne($id);
        redirect(site_url('personne'));
    }
}