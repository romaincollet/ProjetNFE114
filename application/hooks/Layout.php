<?php

class Layout extends CI_Hooks {
  
  function show_layout() {
    
    global $OUT;
    
    // get CI instance
    $this->CI = &get_instance();
    
    // get controller output
    $output = $this->CI->output->get_output();
    
    // load default layout
    $layout = $this->CI->load->file(BASEPATH.'../application/layouts/main.php', true);
    
    // replace layout title with controller title
    $title = isset($this->CI->title)?$this->CI->title:"Default layout title";
    $layout = str_replace('{{TITLE}}', $title, $layout);
    
    // replace layout body with controller output
    $layout = str_replace('{{BODY}}', $output, $layout);
    
    $OUT->_display($layout);    
  }
  
}