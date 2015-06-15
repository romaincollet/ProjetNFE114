<?php

class Auth extends CI_Hooks {

	function authenticate() {

    // get CI instance
		$this->CI = &get_instance();
		$this->CI->load->library('session');
		$this->CI->load->helper('url');

//    if ( get_class($this->CI) !== 'Login' ) {
		if ( !isset($this->CI->authenticate) || (isset($this->CI->authenticate) && $this->CI->authenticate !== FALSE) ) {

			if ( $this->CI->session->userdata('logged_in') !== TRUE ) {
				$this->CI->session->unset_userdata(array('login','logged_in'));
				redirect(base_url().'login');
			}
			else {
				return true;
			}

			$this->CI->session->unset_userdata(array('login','logged_in'));
			redirect(base_url().'login');
		}
		return true;
	}

}