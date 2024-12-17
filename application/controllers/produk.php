<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if (!$this->session->userdata('level')) {
            redirect('auth');
        } else if ($this->session->userdata('level') !== 'Admin') {
            redirect('auth');
        }
    }

    public function index(){
        $this->db->select('*')->from('produk');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
        $data = array(
            'judul_halaman' => 'Aplikasi kasir | Produk',
            'user' => $user
        );
        $this->template->load('template', 'produk_index', $data);
    }

    public function simpan(){
        $this->db->from('produk')->where('kode_produk', $this->input->post('kode_produk'));
        $cek = $this->db->get()->result_array();

        if ($cek == NULL) {
            $data = array(
                'kode_produk' => $this->input->post('kode_produk'),
                'stok' => $this->input->post('stok'),
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
            );
            $this->db->insert('produk', $data);
            $this->session->set_flashdata('notifikasi', '
            <div class="alert alert-primary alert-dismissible" role="alert">
                Produk berhasil ditambahkan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        } else {
            $this->session->set_flashdata('notifikasi', '
            <div class="alert alert-danger alert-dismissible" role="alert">
                Kode produk sudah digunakan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        }
        redirect('produk');
    }

    public function hapus($id_produk){
        $produk = $this->db->get_where('produk', ['id_produk' => $id_produk])->row();
        if ($produk) {
            $this->db->delete('produk', ['id_produk' => $id_produk]);
            $this->session->set_flashdata('notifikasi', '
            <div class="alert alert-primary alert-dismissible" role="alert">
                Produk berhasil dihapus.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        } else {
            $this->session->set_flashdata('notifikasi', '
            <div class="alert alert-danger alert-dismissible" role="alert">
                Produk tidak ditemukan.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
        }
        redirect('produk');
    }

    public function edit($id_produk){
        $this->db->from('produk')->where('id_produk', $id_produk);
        $user = $this->db->get()->row();
        $data = array(
            'judul_halaman' => 'Aplikasi kasir | Edit data Produk',
            'user'          => $user
        );
        $this->template->load('template', 'produk_edit', $data);
    }

    public function update(){
		$data = array(
            'kode_produk'  => $this->input->post('kode_produk'),
            'stok'         => $this->input->post('stok'),
            'nama'         => $this->input->post('nama'),
            'harga'        => $this->input->post('harga')
		);
		$where = array('id_produk'   => $this->input->post('id_produk') );
		$this->db->update('produk',$data,$where);
		$this->session->set_flashdata('notifikasi','																											
		<div class="alert alert-primary alert-dismissible" role="alert"> Produk berhasil diperbarui
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		');
		redirect('produk');
	}
    public function print(){
        $this->db->select('*')->from('produk');
        $this->db->order_by('nama', 'ASC');
        $status = $this->input->get('status');
        if($status=='Ada'){
            $this->db->where('stok >',0);
        } else if($status=='Habis'){
            $this->db->where('stok',0);
        }
        $produk = $this->db->get()->result_array();
        $data = array(
            'status' => $status,
            'produk' => $produk
        );
        $this->load->view('print_produk',$data);
    }
}
