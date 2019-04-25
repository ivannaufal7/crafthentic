 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 class Simple_login {
 
     var $CI = NULL;
     public function __construct() {
         $this->CI =& get_instance();
     }
 
     /*
     * cek username dan password pada table users, jika ada set session berdasar data user dari
     * table users.
     * @param string username dari input form
     * @param string password dari input form
     */
     public function login($email, $password) {
         
         //cek username dan password
         $query = $this->CI->db->get_where('tb_pengguna',array('email'=>$email,'pass' => md5($password)));
 
         if($query->num_rows() == 1) {
             //ambil data user berdasar username
             // $row  = $this->CI->db->query('SELECT id_pengguna,id_pasien, status FROM tb_pengguna join tb_pasien on tb_pengguna.id_pengguna = tb_pasien.id_pengguna where username = "'.$username.'"');
             $this->CI->db->select('tb_pengguna.id_pengguna, nama, email,alamat,notelp');
             $this->CI->db->from('tb_pengguna');
             $this->CI->db->where('tb_pengguna.email',$email);
             $row = $this->CI->db->get();
             $admin     = $row->row();
             $id   = $admin->id_pengguna;
             $nama   = $admin->nama;
             $alamat = $admin->alamat;
             $notelp = $admin->notelp;
 
             //set session user
             $this->CI->session->set_userdata('id_login', uniqid(rand()));
             $this->CI->session->set_userdata('id', $id);
             $this->CI->session->set_userdata('nama', $nama);
             $this->CI->session->set_userdata('alamat', $alamat);
             $this->CI->session->set_userdata('notelp', $notelp);
 
             //redirect ke halaman dashboard
             redirect('Home');
         }else{
 
             //jika tidak ada, set notifikasi dalam flashdata.
             $this->CI->session->set_flashdata('sukses','Username atau password anda salah, silakan coba lagi.. ');
 
             //redirect ke halaman login
             redirect('Login_control');
         }
          return false;
      }
     
     /**
      * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
      * login
      */
     public function cek_login() {
 
         //cek session nama
         if($this->CI->session->userdata('nama') == '') {
 
             //set notifikasi
             $this->CI->session->set_flashdata('sukses','Anda belum login');
 
             //alihkan ke halaman login
             // redirect('login_controller');
         }else{
             return true;
         }
     }
 
     /**
      * Hapus session, lalu set notifikasi kemudian di alihkan
      * ke halaman login
      */
     public function logout() {
         $this->CI->session->unset_userdata('nama');
         $this->CI->session->unset_userdata('alamat');
         $this->CI->session->unset_userdata('notelp');
         $this->CI->session->unset_userdata('id_login');
         $this->CI->session->unset_userdata('id');
         $this->CI->session->set_flashdata('sukses','Anda berhasil logout');
         redirect('login_control');
     }
 }