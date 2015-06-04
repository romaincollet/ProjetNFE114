<?php

class Auth extends CI_Hooks {

	function authenticate() {

		// get CI instance
		$this->CI = &get_instance();
		$this->CI->load->library('session');
		$this->CI->load->helper('url');

		// if ( get_class($this->CI) !== 'Login' ) {
		if ( !isset($this->CI->authenticate) || (isset($this->CI->authenticate) && $this->CI->authenticate !== FALSE)) {

			if ( $this->CI->session->userdata('logged_in') !== TRUE ) {
				
				$login = $this->CI->input->post('login');
				$password = $this->CI->input->post('password');

				if ( "" !== $login && "" !== $password) {
					if ( $this->verification($login,$password) ) {
						$newdata = array(
							'login'     => $this->CI->input->post('login'),
							'logged_in' => TRUE
							);
						$this->CI->session->set_userdata($newdata);
						return true;
					}
				}
			}
			else {
				return true;
			}

			$this->CI->session->unset_userdata(array('login','logged_in'));
			redirect(base_url().'index.php/login');
		}
		return true;
	}

	function verification($login, $password) {
		$test = false;
		$personne = R::findOne( 'personne', ' login = :login ', [ ':login'=>$login ] );
		if ($login === $personne->login && $personne->motdepasse === $password){
			$hash = password_hash($password,PASSWORD_BCRYPT);
			$personne->motdepasse = $hash;
			R::store($personne);
			$test = true;
		}
		elseif ($login == $personne->login && password_verify($password, $personne->motdepasse)){
			$test = true;
		}
		return $test;
	}

}