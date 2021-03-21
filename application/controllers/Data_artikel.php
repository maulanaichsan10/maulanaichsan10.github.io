<?php 

class Data_artikel extends CI_Controller
{

 public function index()
    {
      $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
       $data['title']="Admin Kulzein | Data Artikel";
    	 $data['konten'] = "data_artikel";
       $data['footer'] = "footer";
        $data['artikel'] = $this->model_artikel->get_data('tbl_artikel')->result();
        $this->load->view('dashboard',$data);
    }
    public function tambahData()
    {
       $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
      $data['title']="Admin Kulzein | Tambah Data Artikel";
    	$data['konten'] = "tambah_data_artikel";
      $data['footer'] = "footer";
        $this->load->view('dashboard',$data);
    }
   public function tambahDataAksi()
   {
    $data['title']="Admin Kulzein | Update Data Artikel";
   	$this->_rules();
   	if($this->form_validation->run() == FALSE){
   		$this->tambahdata();
   	}else{
   		$judul_artikel = $this->input->post('judul_artikel');
   		// $gambar = $this->input->post('gambar');
      $gambar = $_FILES['gambar']['name'];
   		$deskripsi = $this->input->post('deskripsi');
   		$tgl_upload = $this->input->post('tgl_upload');
      if($gambar=''){}else{
        $config ['upload_path']   = './assets/uploads/images';
        $config ['allowed_types'] = 'jpg|jpeg|png|tiff';

        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('gambar')){
          echo "Gambar Artikel Gagal diupload!";
        }else{
          $gambar = $this->upload->data('file_name');
        }
      }
   		
   		$data=array(
   				'judul_artikel' => $judul_artikel,
   				'gambar' => $gambar,
   				'deskripsi' => $deskripsi,
   				'tgl_upload' =>$tgl_upload,
   		);
   		$this->model_artikel->insert_data($data,'tbl_artikel');
   		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>Data berhasil ditambahkan!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
   		redirect('index.php/data_artikel');
   	}
   }

   public function updateData($id)
    {
       $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
      $data['title']="Admin Kulzein | Update Data Artikel";
      $data['footer'] = "footer";
    	$where = array('id_artikel'=> $id);
    	$data['artikel']=$this->db->query("SELECT * FROM tbl_artikel WHERE id_artikel='$id'")->result();
    	$data['konten'] = "update_data_artikel";
        $this->load->view('dashboard',$data);
    }

   public function updateDataAksi()
   {
   	$this->_rules();
   	if($this->form_validation->run() == FALSE){
   		$id = $this->input->post('id_artikel');
   		$this->updateData($id);
   	}else{
   		$id 			= $this->input->post('id_artikel');
   		$judul_artikel  = $this->input->post('judul_artikel');
   		$gambar 		= $this->input->post('gambar');
   		$deskripsi 		= $this->input->post('deskripsi');
   		$tgl_upload 	= $this->input->post('tgl_upload');
   		
   		$data=array(
   				'judul_artikel' => $judul_artikel,
   				'gambar'	      => $gambar,
   				'deskripsi'     => $deskripsi,
   				'tgl_upload'    => $tgl_upload,
   		);

   		$where = array(
   				'id_artikel'=> $id
   		);

   		$this->model_artikel->update_data('tbl_artikel',$data,$where);
   		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>Data berhasil diupdate!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
   		redirect('index.php/data_artikel');
   	}
   }

   public function deleteData($id)
   {
   		$where = array('id_artikel' => $id);
   		$this->model_artikel->delete_data($where,'tbl_artikel');
   		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			<strong>Data berhasil dihapus!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
   		redirect('index.php/data_artikel');
   }

   public function _rules()
   {
   		$this->form_validation->set_rules('judul_artikel','judul artikel', 'required' );
   		$this->form_validation->set_rules('gambar','gambar', 'required' );
   		$this->form_validation->set_rules('deskripsi','deskripsi','required' );
   		$this->form_validation->set_rules('tgl_upload','tgl upload','required' );
   }

   public function detail($id){
    $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
    $this->load->model('model_artikel');
    $detail = $this->model_artikel->detail_data($id);
    $data['detail'] = $detail;
    $data['title']="Admin Kulzein | Detail Data Artikel";
    $data['konten'] = "detail_data_artikel";
    $data['footer'] = "footer";
    $this->load->view('dashboard',$data);
   }

}