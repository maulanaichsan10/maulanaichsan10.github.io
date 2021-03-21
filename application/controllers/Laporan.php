<?php

class Laporan extends CI_Controller
{
 public function index()
    {
    	$dari = $this->input->post('dari');
    	$sampai = $this->input->post('sampai');
    	$this->_rules();

    	if($this->form_validation->run()==FALSE){
        	$data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
        	$data['title']="Admin Kulzein | Filter Laporan";
        	$data['konten'] = "filter_laporan";
        	$this->load->view('dashboard',$data);
    	}else{
    		$data['laporan'] = $this->db->query("SELECT * FROM tbl_checkout c, tbl_kostumer ks, tbl_menu mn WHERE c.id_kostumer = ks.id_kostumer AND c.id_menu=mn.id_menu AND date(tanggal_order) >= '$dari' AND date(tanggal_order) <= '$sampai'")->result();
        	$data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
        	$data['title']="Admin Kulzein | Tampil Laporan";
        	$data['konten'] = "tampilkan_laporan";
        	$this->load->view('dashboard',$data);
    	}
 	}

 	public function print_laporan()
 	{
 		$dari   = $this->input->get('dari');
 		$sampai = $this->input->get('sampai');

 		$data['laporan'] = $this->db->query("SELECT * FROM tbl_checkout c, tbl_kostumer ks, tbl_menu mn WHERE c.id_kostumer = ks.id_kostumer AND c.id_menu=mn.id_menu AND date(tanggal_order) >= '$dari' AND date(tanggal_order) <= '$sampai'")->result();
 		$data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
        	$data['title']="Admin Kulzein | Cetak Laporan";
        	$data['konten'] = "cetak_laporan";
        	$this->load->view('dashboard',$data);
 	}

 	public function _rules()
 	{
 		$this->form_validation->set_rules('dari','Dari_tanggal','required');
 		$this->form_validation->set_rules('sampai','Sampai_tanggal','required');
 	} 
}