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
			redirect(site_url('tache'));
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

	public function modifier($code) {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Modifier un tache';
		$tache = $this->Tache_model->get_tache($code);
		$data['tache'] = $tache;

		$this->form_validation->set_rules('nom', 'nom', 'required');
		$this->form_validation->set_rules('description', 'prénom', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->title = "Modifier d'une tache";
			$this->load->view('tache/modifier', $data);
		}
		else
		{
			$this->Tache_model->update_tache($tache);
			redirect(site_url('tache'));
		}
	}

	public function supprimer($code) {
		$this->Tache_model->delete_tache($code);
		redirect(site_url('tache'));
	}
}