<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
        $checkout = $this->db->query("SELECT * FROM tbl_checkout");
        $data['checkout'] = $checkout->num_rows();
        $kostumer = $this->db->query("SELECT * FROM tbl_kostumer");
        $data['kostumer'] = $kostumer->num_rows();
        $artikel = $this->db->query("SELECT * FROM tbl_artikel");
        $data['artikel'] = $artikel->num_rows();
        $data['title']="Admin Kulzein | Dashboard";
    	$data['konten'] = "isi_dashboard";
        $this->load->view('dashboard',$data);
    }

    public function print_grafik()
    {
        $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
            $data['title']="Admin Kulzein | Cetak Grafik";
            $data['konten'] = "cetak_grafik";
            $this->load->view('dashboard',$data);
    }

    // public function grafikPenjualan()
    // {

    //     $data['title']="Admin Kulzein | Grafik Penjualan";
    //     $data['konten'] = "grafik_penjualan";
    //     $this->load->view('dashboard',$data);
    // }
    
    
    // public function data_produk_readytocook()
    // {
    //     $data['konten'] = "data_produk_readytocook";
    //     $this->load->view('dashboard',$data);
    // }
   
    // public function data_checkout()
    // {
    //     $data['user'] = $this->db->get_where('tbl_user',['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $data['title']="Admin Kulzein | Data Checkout";
    // 	$data['konten'] = "data_checkout";
    //     $this->load->view('dashboard',$data);
    // }
   
    public function profil_admin()
    {
        $data['konten'] = "profil_admin";
        $this->load->view('dashboard',$data);
    }
    // public function laporan_print()
    // {
    //     $data['konten'] = "laporan_print";
    //     $this->load->view('dashboard',$data);
    // }
    // public function logout()
    // {
    //     $this->load->view('login');
    // }
}
