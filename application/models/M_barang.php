<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {
	function insertBarang($data){
		$query = $this->db->insert("tb_barang",$data);
		if($query){
			return true;
		}else{
			return false;
		}
	}
	function getDataBarang(){
		$this->db->select("tb_barang.id_brg, tb_barang.nama_brg, harga_brg,deskripsi, kategori_brg, tb_pengguna.id_pengguna, tb_pengguna.alamat, tb_pengguna.notelp, tb_barang.foto_brg");
		$this->db->from("tb_barang");
		$this->db->join("tb_pengguna","tb_barang.id_pengguna = tb_pengguna.id_pengguna");
		$query = $this->db->get();
		if($query->num_rows() != 0){
			return $query->result();
		}else{
			return false;
		}
	}
	function getDataBarangWhere($id){
		$this->db->select("tb_barang.id_brg, tb_barang.nama_brg, harga_brg,deskripsi, kategori_brg, tb_pengguna.id_pengguna, tb_pengguna.alamat, tb_pengguna.notelp, tb_barang.foto_brg");
		$this->db->from("tb_barang");
		$this->db->join("tb_pengguna","tb_barang.id_pengguna = tb_pengguna.id_pengguna");
		$this->db->where("tb_barang.id_brg",$id);
		$query = $this->db->get();
		if($query->num_rows() != 0){
			return $query->result();
		}else{
			return false;
		}
	}

	function getDataBarangProfil($id){
		$this->db->select("tb_barang.id_brg, tb_barang.nama_brg, harga_brg,deskripsi, kategori_brg, tb_pengguna.id_pengguna, tb_pengguna.alamat, tb_pengguna.notelp, tb_barang.foto_brg");
		$this->db->from("tb_barang");
		$this->db->join("tb_pengguna","tb_barang.id_pengguna = tb_pengguna.id_pengguna");
		$this->db->where("tb_pengguna.nama",$id);
		$query = $this->db->get();
		if($query->num_rows() != 0){
			return $query->result();
		}else{
			return false;
		}
	}
	function deleteBarang($table, $id){
		$this->db->where("id_brg",$id);
		$this->db->delete($table);
	}
	function updateBarang($table,$where,$data){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function updateBarang2($id,$data){
		$this->db->where('id_brg = ',$id);
		$this->db->update('tb_barang', $data);
		redirect('profil_control');
	}
}