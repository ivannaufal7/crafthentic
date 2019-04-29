<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_umkm extends CI_Model {

	function get_umkm_data() {
		$this->db->select('id_umkm, nama_pemilik, nama_umkm, alamat_umkm, deskripsi_umkm, foto_umkm, butuh_dana');
		$this->db->from('tb_umkm');
		$query = $this->db->get();
	    return $query->result_array();
	}

	function get_specified_umkm($id){
		$this->db->select('id_umkm, nama_pemilik, nama_umkm, alamat_umkm, deskripsi_umkm, foto_umkm, butuh_dana');
		$this->db->from('tb_umkm');
		$this->db->where('id_umkm = ',$id);
		$query = $this->db->get();
	    return $query->result_array();
	}

	function get_each_umkm_funding($id){
		$this->db->select('sum(jumlah_funding) as jumlah_funding');
		$this->db->from('tb_funding');
		$this->db->where('id_umkm = ',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

	function insert_data_dana($data){
		$this->db->insert('tb_funding', $data);
	}
}