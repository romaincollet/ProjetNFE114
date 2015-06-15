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
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');

		$this->form_validation->set_rules('login', 'login', 'required');
		$this->form_validation->set_rules('password', 'mot de passe', 'required');

		
		if ($this->form_validation->run() === FALSE)
		{
			echo "etape 1";
			$this->load->view('login');
		}
		elseif($this->verification()) 
		{

			$newdata = array(
				'login'     => $this->input->post('login'),
				'logged_in' => TRUE
				);
			$this->session->set_userdata($newdata);
			redirect(site_url('projet'));
			echo "etape 2";
		}
		else
		{

			redirect(site_url('login'));
			echo "etape 3";
		}
	}

	/*
	public function logout(){
		$this->authenticate = FALSE;
		$this->CI->session->unset_userdata(array('login','logged_in'));
		redirect(base_url().'index.php/login');


		
	}
	*/
	public function verification() {
		$test = false;

		$login = $this->input->post('login');
		$password = $this->input->post('password');

		$utilisateur = R::findOne( 'utilisateur', ' login = :login ', [ ':login'=>$login ] );
		var_dump($utilisateur);
		if ($login === $utilisateur->login && $utilisateur->password === $password){
			$hash = password_hash($password,PASSWORD_BCRYPT);
			$utilisateur->password = $hash;
			R::store($utilisateur);
			$test = true;
		}
		elseif ($login == $utilisateur->login && password_verify($password, $utilisateur->password)){
			$test = true;
		}
		return $test;
	}
}