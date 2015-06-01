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
        if ( $this->CI->input->post('password') === 'test' ) {
          $newdata = array(
               'email'     => $this->CI->input->post('email'),
               'logged_in' => TRUE
          );
          $this->CI->session->set_userdata($newdata);
          return true;
        }
      }
      else {
        return true;
      }
      
      $this->CI->session->unset_userdata(array('email','logged_in'));
      redirect(base_url().'index.php/login');
    }
    return true;
  }
  
}