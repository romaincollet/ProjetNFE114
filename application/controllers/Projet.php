<?php
class Projet extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Projet_model');
        $this->load->model('Tache_model');
    }

    public function index() {

        $data['projets'] = $this->Projet_model->get_projet();
        $data['title'] = "Liste des projets";

        $this->load->view('projet/index', $data);
        
    }

    public function view($id = NULL)
    {
        $data['projet'] = $this->Projet_model->get_projet($id);
        
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

    public function modifier($id) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Modifier un projet';
        $projet = $this->Projet_model->get_projet($id);
        $data['projet'] = $projet;

        $this->form_validation->set_rules('nom', 'nom', 'required');
        $this->form_validation->set_rules('description', 'prénom', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('projet/modifier', $data);
        }
        else
        {
            $this->Projet_model->update_projet($projet);
            redirect(site_url('projet/'.$id));
        }
    }

    public function supprimer($id) {

        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Supprimer le projet';
        $projet = $this->Projet_model->get_projet($id);
        $data['projet'] = $projet;

        $this->form_validation->set_rules('check', 'check', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('projet/supprimer', $data);
        }
        else
        {
            $this->Projet_model->delete_projet($id);
            redirect(site_url('projet'));
        }
    }

    public function listeTache($id) {

        $data['title'] = 'Liste des taches';
        $projet = $this->Projet_model->get_projet($id);
        $data['projet'] = $projet;
        
        $taches = $projet->ownTacheList;
        $data['taches'] = $taches;

        $this->load->view('projet/listeTache', $data);
    }

    public function listeEquipier($id) {

        $data['title'] = 'Liste des équipiers';
        $projet = $this->Projet_model->get_projet($id);
        $data['projet'] = $projet;
        
        $equipiers = $projet->ownPersonneList;
        $data['equipiers'] = $equipiers;

        $this->load->view('projet/listeEquipier', $data);
    }

    public function ajouterEquipier($id) {

        $this->load->library('form_validation');
        $this->load->model('Personne_model');

        $projet = $this->Projet_model->get_projet($id);
        $data['projet'] = $projet;

        $data['title'] = 'Ajouter un équipier';
        $personnes = $this->Personne_model->get_personne_sans_projet();
        $data['personnes'] = $personnes;

        $this->form_validation->set_rules('equipier', 'equipier', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('projet/ajouterEquipier', $data);
        }
        else
        {
            $this->Projet_model->ajouter_equipier($projet);
            redirect(site_url('projet/listeEquipier/'.$id));
        }
    }

    public function retirerEquipier($id) {
        $this->load->model('Personne_model');

        $personne = $this->Personne_model->get_personne($id);

        $this->Projet_model->retirer_equipier($id);
        redirect(site_url('projet/listeEquipier/'.$personne->projet_id));
    }

    public function affecterEquipier($id) {

        $this->load->library('form_validation');

        $projet = $this->Projet_model->get_projet($id);
        $data['projet'] = $projet;

        $data['title'] = 'Affecter un équipier à une tache';
        $data['equipiers'] = $projet->ownPersonneList;
        $data['taches'] = $projet->ownTacheList;

        $this->form_validation->set_rules('equipier', 'equipier', 'required');
        $this->form_validation->set_rules('tache', 'tache', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('projet/affecterEquipier', $data);
        }
        else
        {
            $this->Projet_model->affecter_equipier($projet);
            redirect(site_url('projet/'.$id));
        }
    }
}