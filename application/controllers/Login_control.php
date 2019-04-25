<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_control extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function login(){
		$valid = $this->form_validation;
		$email = $this->input->post('email');
		$password = $this->input->post('pass');
		$valid->set_rules('email','email','required');
		$valid->set_rules('pass','pass','required');
		if($valid->run()){
			$this->simple_login->login($email,$password);
		}
	}
	public function logout(){
		$this->simple_login->logout();
	}
}
