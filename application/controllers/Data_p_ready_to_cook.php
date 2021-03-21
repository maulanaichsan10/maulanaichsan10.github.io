<?php 

class Data_p_ready_to_cook extends CI_Controller
{

public function index()
    {
      $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
      $data['title']="Admin Kulzein | Data Produk Ready To Cook";
    	$data['konten'] = "data_produk_ready_to_cook";
      $data['readycook']  = $this->model_p_ready_to_cook->get_data('tbl_ready_to_cook')->result();
    	$this->load->view('dashboard',$data);
    }
    public function tambahData()
    {
      $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
    	$data['konten'] = "tambah_data_produk_ready_to_cook";
      $data['title']="Admin Kulzein | Tambah Data Produk Ready to Cook";
      $this->load->view('dashboard',$data);
    }
   public function tambahDataAksi()
   {
   	$this->_rules();
   	if($this->form_validation->run() == FALSE){
   		$this->tambahData();
   	}else{
   		$nama_p_ready_to_cook 	    = $this->input->post('nama_p_ready_to_cook ');
   		$deskripsi_p_ready_to_cook  = $this->input->post('deskripsi_p_ready_to_cook ');
   		$harga_p_ready_to_cook	            = $this->input->post('harga_p_ready_to_cook ');
   		// $foto_p_rumahan		 = $this->input->post('foto_p_rumahan');
      $foto_p_ready_to_cook               = $_FILES['foto_p_ready_to_cook ']['name'];
   		$tanggal_upload             = $this->input->post('tanggal_upload');
      if($foto_p_ready_to_cook =''){}else{
        $config ['upload_path']   = './assets/uploads/images';
        $config ['allowed_types'] = 'jpg|jpeg|png|tiff';

        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('foto_p_ready_to_cook ')){
          echo "Foto Produk Ready To Cook Gagal diupload!";
        }else{
          $foto_p_ready_to_cook  = $this->upload->data('file_name');
        }
      }
   		
   		$data=array(
   				'nama_p_ready_to_cook ' 		    => $nama_p_ready_to_cook ,
   				'deskripsi_p_ready_to_cook ' 	  => $deskripsi_p_ready_to_cook ,
   				'harga_p_ready_to_cook ' 		    => $harga_p_ready_to_cook ,
   				'foto_p_ready_to_cook ' 		    => $foto_p_ready_to_cook ,
   				'tanggal_upload' 		            => $tanggal_upload,
   		);
   		$this->model_p_ready_to_cook ->insert_data($data,'tbl_ready_to_cook');
   		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>Data Produk Ready to Cook berhasil ditambahkan!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
   		redirect('index.php/data_p_ready_to_cook');
   	}
   }

   public function updateData($id)
    {
       $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
    	$where = array('id_p_ready_to_cook'=> $id);
    	$data['readycook']=$this->db->query("SELECT * FROM tbl_ready_to_cook WHERE id_p_ready_to_cook='$id'")->result();
       $data['title']="Admin Kulzein | Update Data Produk Ready to Cook";
    	$data['konten'] = "update_data_produk_ready_to_cook";
        $this->load->view('dashboard',$data);
    }

   public function updateDataAksi()
   {
   	$this->_rules();
   	if($this->form_validation->run() == FALSE){
   		$id = $this->input->post('id_p_ready_to_cook');
   		$this->updateData($id);
   	}else{
   		$id 				               = $this->input->post('id_p_ready_to_cook');
   		$nama_p_ready_to_cook 	   = $this->input->post('nama_p_ready_to_cook');
   		$deskripsi_p_ready_to_cook = $this->input->post('deskripsi_p_ready_to_cook');
   		$harga_p_ready_to_cook	   = $this->input->post('harga_p_ready_to_cook');
   		$foto_p_ready_to_cook		   = $this->input->post('foto_p_ready_to_cook');
   		$tanggal_upload            = $this->input->post('tanggal_upload');
   		
   		$data=array(
   				'nama_p_ready_to_cook' 		    => $nama_p_ready_to_cook,
   				'deskripsi_p_ready_to_cook' 	=> $deskripsi_p_ready_to_cook,
   				'harga_p_ready_to_cook' 		  => $harga_p_ready_to_cook,
   				'foto_p_ready_to_cook' 		    => $foto_p_ready_to_cook,
   				'tanggal_upload' 		          => $tanggal_upload,
   		);

   		$where = array(
   				'id_p_ready_to_cook'=> $id
   		);

   		$this->model_p_ready_to_cook->update_data('tbl_ready_to_cook',$data,$where);
   		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>Data Produk Ready to Cook berhasil diupdate!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
   		redirect('index.php/data_p_ready_to_cook');
   	}
   }

   public function deleteData($id)
   {
   		$where = array('id_p_ready_to_cook' => $id);
   		$this->model_p_ready_to_cook->delete_data($where,'tbl_ready_to_cook');
   		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			<strong>Data Produk Ready to Cook berhasil dihapus!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
   		redirect('index.php/Data_p_ready_to_cook');
   }

   public function _rules()
   {
   		$this->form_validation->set_rules('nama_p_ready_to_cook','nama_p_ready_to_cook', 'required' );
   		$this->form_validation->set_rules('deskripsi_p_ready_to_cook','deskripsi_p_ready_to_cook', 'required' );
   		$this->form_validation->set_rules('harga_p_ready_to_cook','harga_p_ready_to_cook','required' );
   		$this->form_validation->set_rules('foto_p_ready_to_cook','foto_p_ready_to_cook','required' );
   		$this->form_validation->set_rules('tanggal_upload','tanggal_upload','required' );
   }

   public function detail($id){
    $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
    $this->load->model('model_p_ready_to_cook');
    $detail = $this->model_p_ready_to_cook->detail_data($id);
    $data['detail'] = $detail;
    $data['title']="Admin Kulzein | Detail Data Produk Ready to Cook";
    $data['konten'] = "detail_data_produk_ready_to_cook";
    $this->load->view('dashboard',$data);
   }
}