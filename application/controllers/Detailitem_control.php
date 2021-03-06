<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailitem_control extends CI_Controller {

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
	function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('M_barang');
         $this->load->model('M_akun');
    }
	public function index()
	{
		$this->load->view('detail_item');
	}

	public function detailbrg($id){
		$data['detail'] = $this->M_barang->getDataBarangWhere($id);
		$this->load->view('detail_item',$data);
	}

	public function belibrg($id){
		$query = $this->db->get_where("tb_barang",["id_brg" => $id])->row();
		$qty = $this->input->post('qty');
		$data = array(
			'qty' => $qty,
			'id_brg' => $query->id_brg,
			'nama_brg' => $query->nama_brg,
			'total_hrg' => $qty * $query->harga_brg,
			'harga_brg' => $query->harga_brg,
			'foto' => $query->foto_brg
		);
		$id_pengguna = $this->session->userdata('id');
		$data['user'] = $this->M_akun->get_specified_user($id_pengguna);
		// print_r($data);																																
		$this->load->view('belibarang',$data);
	}
}
