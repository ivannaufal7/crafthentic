<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class umkm_control extends CI_Controller {

	function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('M_umkm');
    }

    function detil_umkm($id){
    	$data['umkm'] = $this->M_umkm->get_specified_umkm($id);
    	$this->load->view('form_pendanaan', $data);
    }

    function taruh_dana($id){
    	$data = array(
            'id_pengguna' => $this->input->post('id'),
            'id_umkm' => $id,
            'jumlah_funding'=> $this->input->post('jumlah_funding')
        );
        $this->M_umkm->insert_data_dana($data);
    	redirect('home');
    }
}