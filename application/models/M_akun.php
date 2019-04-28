<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_akun extends CI_Model {
	function daftar($table,$data){
		$this->db->insert($table,$data); 
		return $this->db->insert_id();;
	}

	function edit_profile($id,$data)
	{
		$this->db->where('id_pengguna = ',$id);
		$this->db->update('tb_pengguna', $data);
		$this->session->set_userdata('nama', $data['nama']);
		$this->session->set_userdata('alamat', $data['alamat']);
		$this->session->set_userdata('notellp', $data['notelp']);
	}

	function get_specified_user($id){
		$this->db->select('id_pengguna, nama, email, alamat, notelp');
		$this->db->from('tb_pengguna');
		$this->db->where('id_pengguna = ', $id);
		$query = $this->db->get();
        return $query->result_array();
	}
}
