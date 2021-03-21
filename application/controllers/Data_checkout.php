<?php 

class Data_checkout extends CI_Controller
{

 public function index()

    {
        $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title']="Admin Kulzein | Data Checkout";
    	$data['konten'] = "data_checkout";
        $data['checkout'] = $this->model_checkout->get_data('tbl_checkout')->result();
        $this->load->view('dashboard',$data);
        // $foto_kostumer = $_FILES['foto_kostumer']['name'];
    //     if($foto_kostumer=''){}else{
    //     $config ['upload_path']   = './assets/uploads/images';
    //     $config ['allowed_types'] = 'jpg|jpeg|png|tiff';

    //     $this->load->library('upload',$config);
    //     if(!$this->upload->do_upload('gambar')){
    //       echo "Foto kostumer Gagal diupload!";
    //     }else{
    //       $gambar = $this->upload->data('file_name');
    //     }
    //   }
    // }
}
// public function detail($id){
//      $data['user'] = $this->db->get_where('tbl_user',['username' =>
//         $this->session->userdata('username')])->row_array();
//     $this->load->model('model_kostumer');
//     $detail = $this->model_kostumer->detail_data($id);
//     $data['detail'] = $detail;
//     $data['title']="Admin Kulzein | Detail Data Kostumer";
//     $data['konten'] = "detail_data_kostumer";
//     $this->load->view('dashboard',$data);
//    }

public function updateData($id)
{
  $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
  $data['title']="Admin Kulzein | Update Status Data Checkout";
    $where = array('id_checkout'=> $id);
    $data['checkout']=$this->db->query("SELECT * FROM tbl_checkout WHERE id_checkout='$id'")->result();
    $data['konten'] = "update_status_data_checkout";
    $this->load->view('dashboard',$data);
}

public function updateDataAksi()
{
    date_default_timezone_set('Asia/Jakarta');
   $this->_rules();
   if($this->form_validation->run() == FALSE){
       $id = $this->input->post('id_checkout');
       $this->updateData($id);
   }else{
       $id 				         = $this->input->post('id_checkout');
       $no_pembayaran 	         = $this->input->post('no_pembayaran');
       $id_kostumer              = $this->input->post('id_kostumer');
       $id_menu                  = $this->input->post('id_menu');
       $alamat_tujuan	         = $this->input->post('alamat_tujuan');
       $tanggal_order		     = $this->input->post('tanggal_order');
       $batas_bayar 		     = $this->input->post('batas_bayar');
       $total                    = $this->input->post('total');
       $status                   = $this->input->post('status');
       
       $data=array(
               'no_pembayaran' 		    => $no_pembayaran,
               'id_kostumer' 	        => $id_kostumer,
               'id_menu'                => $id_menu,
               'alamat_tujuan' 		    => $alamat_tujuan,
               'tanggal_order' 	    	=> date('Y-m-d H:i:s'),
               'batas_bayar'            => date('Y-m-d H:i:s',mktime(date('H'),date('i') + 30,date('s'),date('m'),date('d'),date('Y'))),
               'total ' 		        => $total ,
               'status' 	        	=> $status
       );

       $where = array(
               'id_checkout'=> $id
       );

       $this->model_checkout->update_data('tbl_checkout',$data,$where);
       $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Status berhasil diupdate!</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times</span>
          </button>
        </div>');
       redirect('index.php/data_checkout');
   }
}
    public function _rules()
   {
   		$this->form_validation->set_rules('no_pembayaran','no_pembayaran', 'required' );
   		$this->form_validation->set_rules('id_kostumer','id_kostumer', 'required' );
   		$this->form_validation->set_rules('alamat_tujuan','alamat_tujuan','required' );
   		$this->form_validation->set_rules('tanggal_order','tanggal_order','required' );
   		$this->form_validation->set_rules('total','total','required' );
        $this->form_validation->set_rules('status','status','required' );
   }

   public function detail($id){
    $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
   $this->load->model('model_checkout');
   $detail = $this->model_checkout->detail_data($id);
   $data['detail'] = $detail;
   $data['title']="Admin Kulzein | Detail Data Produk Rumahan";
   $data['konten'] = "detail_status_data_checkout";
   $this->load->view('dashboard',$data);
  }

}