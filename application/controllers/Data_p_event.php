<?php 

class Data_p_event extends CI_Controller
{

public function index()
    {
      $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
      $data['title']="Admin Kulzein | Data Produk Event";
    	$data['konten'] = "data_produk_event";
      $data['event']  = $this->model_p_event->get_data('tbl_produk_event')->result();
    	$this->load->view('dashboard',$data);
    }
    public function tambahData()
    {
       $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
       $data['title']="Admin Kulzein | Tambah Data Produk Event";
    	$data['konten'] = "tambah_data_produk_event";
      $this->load->view('dashboard',$data);
    }
   public function tambahDataAksi()
   {
   	$this->_rules();
   	if($this->form_validation->run() == FALSE){
   		$this->tambahData();
   	}else{
   		$nama_p_event 	    = $this->input->post('nama_p_event');
   		$deskripsi_p_event  = $this->input->post('deskripsi_p_event');
   		$harga_p_event	    = $this->input->post('harga_p_event');
   		// $foto_p_rumahan		 = $this->input->post('foto_p_rumahan');
      $foto_p_event       = $_FILES['foto_p_event']['name'];
   		$tanggal_upload     = $this->input->post('tanggal_upload');
      if($foto_p_event=''){}else{
        $config ['upload_path']   = './assets/uploads/images';
        $config ['allowed_types'] = 'jpg|jpeg|png|tiff';

        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('foto_p_event')){
          echo "Foto Produk Event Gagal diupload!";
        }else{
          $foto_p_event = $this->upload->data('file_name');
        }
      }
   		
   		$data=array(
   				'nama_p_event' 		    => $nama_p_event,
   				'deskripsi_p_event' 	=> $deskripsi_p_event,
   				'harga_p_event' 		  => $harga_p_event,
   				'foto_p_event' 		    => $foto_p_event,
   				'tanggal_upload' 		  => $tanggal_upload,
   		);
   		$this->model_p_event->insert_data($data,'tbl_produk_event');
   		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>Data Produk Event berhasil ditambahkan!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
   		redirect('index.php/data_p_event');
   	}
   }

   public function updateData($id)
    {
       $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
    	$where = array('id_p_event'=> $id);
    	$data['event']=$this->db->query("SELECT * FROM tbl_produk_event WHERE id_p_event='$id'")->result();
      $data['title']="Admin Kulzein | Update Data Produk Event";
    	$data['konten'] = "update_data_produk_event";
        $this->load->view('dashboard',$data);
    }

   public function updateDataAksi()
   {
   	$this->_rules();
   	if($this->form_validation->run() == FALSE){
   		$id = $this->input->post('id_p_event');
   		$this->updateData($id);
   	}else{
   		$id 				       = $this->input->post('id_p_event');
   		$nama_p_event 	   = $this->input->post('nama_p_event');
   		$deskripsi_p_event = $this->input->post('deskripsi_p_event');
   		$harga_p_event	   = $this->input->post('harga_p_event');
   		$foto_p_event		   = $this->input->post('foto_p_event');
   		$tanggal_upload    = $this->input->post('tanggal_upload');
   		
   		$data=array(
   				'nama_p_event' 		    => $nama_p_event,
   				'deskripsi_p_event' 	=> $deskripsi_p_event,
   				'harga_p_event' 		  => $harga_p_event,
   				'foto_p_event' 		    => $foto_p_event,
   				'tanggal_upload' 		  => $tanggal_upload,
   		);

   		$where = array(
   				'id_p_event'=> $id
   		);

   		$this->model_p_event->update_data('tbl_produk_event',$data,$where);
   		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>Data Produk Event berhasil diupdate!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
   		redirect('index.php/data_p_event');
   	}
   }

   public function deleteData($id)
   {
   		$where = array('id_p_event' => $id);
   		$this->model_p_event->delete_data($where,'tbl_produk_event');
   		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			<strong>Data Produk Event berhasil dihapus!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
   		redirect('index.php/data_p_event');
   }

   public function _rules()
   {
   		$this->form_validation->set_rules('nama_p_event','nama_p_event', 'required' );
   		$this->form_validation->set_rules('deskripsi_p_event','deskripsi_p_event', 'required' );
   		$this->form_validation->set_rules('harga_p_event','harga_p_event','required' );
   		$this->form_validation->set_rules('foto_p_event','foto_p_event','required' );
   		$this->form_validation->set_rules('tanggal_upload','tanggal_upload','required' );
   }

   public function detail($id){
    $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
    $this->load->model('model_p_event');
    $detail = $this->model_p_event->detail_data($id);
    $data['detail'] = $detail;
    $data['title']="Admin Kulzein | Detail Data Produk Event";
    $data['konten'] = "detail_data_produk_event";
    $this->load->view('dashboard',$data);
   }
}