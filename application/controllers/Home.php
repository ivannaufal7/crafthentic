<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('M_barang');
         $this->load->model('M_umkm');
    }
	public function index()
	{
		$data['barang'] = $this->M_barang->getDataBarang();
		$data['umkm'] = $this->M_umkm->get_umkm_data();
		$this->load->view('index',$data);
	}

	public function deleteBrg($id){
		$query = $this->M_barang->deleteBarang("tb_barang",$id);
		$_id = $this->db->get_where("tb_barang",["id_brg" => $id])->row();
		redirect('Home');
	}
	public function edit()
	{
		$this->load->view('edit_barang');
	}	
}
