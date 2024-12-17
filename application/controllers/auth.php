<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
	public function index(){
		$data = array(
		    'judul_halaman' => 'Login',
		);
		$this->load->view('login',$data);
	}
    public function login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user')->where('username',$username);
		$cek = $this->db->get()->row();
        if($cek==NULL){
            $this->session->set_flashdata('notifikasi','
			<div class="alert alert-primary alert-dismissible" role="alert"> Username tidak ditemukan!
			    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		     </div>
			');
            redirect('auth');
        } else if($cek->password==$password){
            $data = array(
                'id_user'   => $cek->id_user,
                'username'   => $cek->username,
                'level'   => $cek->level,
                'nama'   => $cek->nama,
            );
            $this->session->set_userdata($data);
            redirect('home');
        } else {
            $this->session->set_flashdata('notifikasi','
			<div class="alert alert-primary alert-dismissible" role="alert"> password salah!
			    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		     </div>
			');
            redirect('auth');

        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
}