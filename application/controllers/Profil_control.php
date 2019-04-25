<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_control extends CI_Controller {
	function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('M_barang');
    }

	public function index()
	{
		$id = $this->session->userdata('nama');
		$data['barang'] = $this->M_barang->getDataBarangProfil($id);
		$this->load->view('profile',$data);
	}
}
