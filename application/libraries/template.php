<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template {
    // Deklarasikan properti $CI
    private $CI; 
    
    var $template_data = array();

    function set($name, $value) {
        $this->template_data[$name] = $value;
    }

    function load($template = '', $view = '', $view_data = array(), $return = FALSE) {
        // Gunakan properti $CI     yang telah dideklarasikan
        $this->CI = &get_instance(); 
        $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
        return $this->CI->load->view($template, $this->template_data, $return);
    }
}