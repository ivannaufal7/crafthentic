<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class umkm_control extends CI_Controller {
	function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('M_umkm');
    }

    function get_all_umkm(){
    	$data = $this->M_umkm->get_umkm_data();
    }

}