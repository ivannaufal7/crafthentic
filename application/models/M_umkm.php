<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_umkm extends CI_Model {
	
	function get_umkm_data() {
		$this->db->select('id_umkm, nama_pemilik, nama_umkm, alamat_umkm, deskripsi_umkm, foto_umkm');
		$this->db->from('tb_umkm');
		$query = $this->db->get();
	    return $query->result_array();
	}
}