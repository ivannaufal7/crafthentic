<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_control extends CI_Controller {
	function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('M_barang');
         $this->load->model('M_akun');
    }

	public function index()
	{
		$id = $this->session->userdata('nama');
		$data['barang'] = $this->M_barang->getDataBarangProfil($id);
		$this->load->view('profile',$data);
	}

	public function edit($id){
		$data['user'] = $this->M_akun->get_specified_user($id);
		$this->load->view('edit_profile', $data);
	}

	public function edit_profil(){
		$data = array(
            'id_pengguna' => $this->input->post('id_pengguna'),
            'nama'=> $this->input->post('nama'),
            'email'=> $this->input->post('email'),
            'alamat'=> $this->input->post('alamat'),
            'notelp'=> $this->input->post('notelp')
        );

        $this->M_akun->edit_profile($data['id_pengguna'],$data);
        redirect('profil_control');
	}
}
