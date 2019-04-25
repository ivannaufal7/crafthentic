<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploadbrg_control extends CI_Controller {
    function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('M_barang');
    }

    public function index()
    {
        $this->load->view('uploadbarang');
    }

    public function do_upload() {
    $config['upload_path']          = './assets/img/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 8048;
    $config['max_width']            = 3000;
    $config['max_height']           = 3000;
    $this->load->library('upload', $config);
    if (!$this->upload->do_upload('userfile')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('uploadbarang', $error);
    }else{
        $_data = array('upload_data' => $this->upload->data());
         $data = array(
            'nama_brg'=> $this->input->post('nama_brg'),
            'harga_brg'=> $this->input->post('harga_brg'),
            'deskripsi'=> $this->input->post('deskripsi'),
            'kategori_brg'=> $this->input->post('kategori_brg'),
            'foto_brg' => $_data['upload_data']['file_name'],
            'tgl_post' => date('Y-m-d H:i:s'), 
            'id_pengguna' => $this->session->userdata('id'),
            );
         print_r($data);
        if($this->M_barang->insertBarang($data)){
            echo 'berhasil di upload';
            
            redirect('Home');
        }else{
            echo 'gagal upload';
        }
    }
}

}
