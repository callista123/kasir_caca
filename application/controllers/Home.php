<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('level') == NULL) {
            redirect('auth');
        }
    }

    public function index() {
        date_default_timezone_set('Asia/Jakarta');
        $tanggal = date("Y-m-d");

        // Menghitung total harga untuk hari ini
        $this->db->select('sum(total_harga) as total');
        $this->db->from('penjualan');
        $this->db->where("DATE_FORMAT(tanggal, '%Y-%m-%d') =", $tanggal); // Tambahkan "="
        $hari_ini = $this->db->get()->row()->total ?? 0; // Fallback nilai default jika null

        // Menghitung jumlah transaksi hari ini
        $this->db->from('penjualan');
        $this->db->where("DATE_FORMAT(tanggal, '%Y-%m-%d') =", $tanggal); // Tambahkan "="
        $transaksi = $this->db->count_all_results();

        // Menghitung jumlah total produk
        $produk = $this->db->from('produk')->count_all_results();

        // Menghitung total bulan ini
        $tanggal = date("Y-m");
        $this->db->select('sum(total_harga) as total');
        $this->db->from('penjualan');
        $this->db->where("DATE_FORMAT(tanggal, '%Y-%m') =", $tanggal); // Tambahkan "="
        $bulan_ini = $this->db->get()->row()->total ?? 0; // Fallback nilai default jika null

        // Data untuk dikirim ke template
        $data = array(
            'judul_halaman' => 'Aplikasi Kasir | Dashboard',
            'hari_ini'      => $hari_ini,
            'transaksi'     => $transaksi,
            'bulan_ini'     => $bulan_ini,
            'produk'        => $produk,
        );

        // Memuat template dan data
        $this->template->load('template', 'beranda', $data);
    }
}
?>
