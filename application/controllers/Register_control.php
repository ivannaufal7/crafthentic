<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_control extends CI_Controller {
	function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('M_akun');
    }

	public function index()
	{
		$this->load->view('register');
	}

	public function daftarAkun(){
		$this->form_validation->set_rules('nama','nama','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('pass','pass','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('notelp','notelp','required');

		if($this->form_validation->run() == false){
			redirect("Register_control");
		}else{
			$data = array(
				"nama" =>$this->input->post("nama"),
				"email" =>$this->input->post("email"),
				"pass" =>md5($this->input->post("pass")),
				"alamat" =>$this->input->post("alamat"),
				"notelp" =>$this->input->post("notelp"),
			);

			$this->M_akun->daftar("tb_pengguna",$data);
			redirect("Login_control");
		}

	}
}
