<?php
class Tache extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('Tache_model');
	}

	public function view($id) {

		$this->load->library('form_validation');
		$this->load->model('Projet_model');

		$tache = $this->Tache_model->get_tache($id);
		$data['tache'] = $tache;
		$data['equipiers'] = $tache->sharedPersonneList;

        $projet = $this->Projet_model->get_projet($tache->projet_id);

        $data['equipiersDispo'] = $projet->ownPersonneList;

        $this->form_validation->set_rules('equipier', 'equipier', 'required');

        if ($this->form_validation->run() === FALSE)
        {
        	$this->title = $tache->nom;
            $this->load->view('tache/view', $data);
        }
        else
        {
            $this->Tache_model->affecter_equipier($tache);
            $tache = $tache->fresh();
			$data['tache'] = $tache;
			$data['equipiers'] = $tache->sharedPersonneList;
            $this->load->view('tache/view', $data);
        }
	}

	public function nouveau($idProjet) {

		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('Projet_model');

		$data['title'] = 'Créer une nouvelle tache';

		$projet = $this->Projet_model->get_projet($idProjet);
        $data['projet'] = $projet;

		$this->form_validation->set_rules('nom', 'nom de la tache', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('duree', 'duree', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->title = "Création d'une tache";
			$this->load->view('tache/nouveau', $data);
		}
		else
		{
			$this->Tache_model->set_tache($projet);
			redirect(site_url('projet/listeTache/'.$idProjet));
		}
	}

	public function modifier($id) {

		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Modifier un tache';
		$tache = $this->Tache_model->get_tache($id);
		$data['tache'] = $tache;

		$this->form_validation->set_rules('nom', 'nom', 'required');
		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('duree', 'duree', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->title = "Modifier d'une tache";
			$this->load->view('tache/modifier', $data);
		}
		else
		{
			$this->Tache_model->update_tache($tache);
			redirect(site_url('projet/listeTache/'.$tache->projet_id));
		}
	}

	public function supprimer($id) {

		$this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Supprimer la tache';
        $tache = $this->Tache_model->get_tache($id);
        $data['tache'] = $tache;

        $this->form_validation->set_rules('check', 'check', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('tache/supprimer', $data);
        }
        else
        {
            $this->Tache_model->delete_tache($id);
            redirect(site_url('projet/listeTache/'.$tache->projet_id));
        }
	}
}