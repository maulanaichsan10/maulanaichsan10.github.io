<?php 

class Data_p_rumahan extends CI_Controller
{

public function index()
    {
      $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
      $data['title']="Admin Kulzein | Data Produk Rumahan";
    	$data['konten'] = "data_produk_rumahan";
      $data['rumahan'] = $this->model_p_rumahan->get_data('tbl_produk_rumahan')->result();
    	$this->load->view('dashboard',$data);
    }
    public function tambahData()
    {
      $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
      $data['title']="Admin Kulzein | Tambah Data Produk Rumahan";
    	$data['konten'] = "tambah_data_produk_rumahan";
        $this->load->view('dashboard',$data);
    }
   public function tambahDataAksi()
   {
   	$this->_rules();
   	if($this->form_validation->run() == FALSE){
   		$this->tambahData();
   	}else{
   		$nama_p_rumahan 	   = $this->input->post('nama_p_rumahan');
   		$deskripsi_p_rumahan = $this->input->post('deskripsi_p_rumahan');
   		$harga_p_rumahan	   = $this->input->post('harga_p_rumahan');
   		// $foto_p_rumahan		 = $this->input->post('foto_p_rumahan');
      $foto_p_rumahan      = $_FILES['foto_p_rumahan']['name'];
   		$tanggal_upload      = $this->input->post('tanggal_upload');
      if($foto_p_rumahan=''){}else{
        $config ['upload_path']   = './assets/uploads/images';
        $config ['allowed_types'] = 'jpg|jpeg|png|tiff';

        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('foto_p_rumahan')){
          echo "Gambar Artikel Gagal diupload!";
        }else{
          $foto_p_rumahan = $this->upload->data('file_name');
        }
      }
   		
   		$data=array(
   				'nama_p_rumahan' 		=> $nama_p_rumahan,
   				'deskripsi_p_rumahan' 	=> $deskripsi_p_rumahan,
   				'harga_p_rumahan' 		=> $harga_p_rumahan,
   				'foto_p_rumahan' 		=> $foto_p_rumahan,
   				'tanggal_upload' 		=>$tanggal_upload,
   		);
   		$this->model_p_rumahan->insert_data($data,'tbl_produk_rumahan');
   		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>Data Produk Rumahan berhasil ditambahkan!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
   		redirect('index.php/data_p_rumahan');
   	}
   }

   public function updateData($id)
    {
      $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
      $data['title']="Admin Kulzein | Update Data Produk Rumahan";
    	$where = array('id_p_rumahan'=> $id);
    	$data['rumahan']=$this->db->query("SELECT * FROM tbl_produk_rumahan WHERE id_p_rumahan='$id'")->result();
    	$data['konten'] = "update_data_produk_rumahan";
        $this->load->view('dashboard',$data);
    }

   public function updateDataAksi()
   {
   	$this->_rules();
   	if($this->form_validation->run() == FALSE){
   		$id = $this->input->post('id_p_rumahan');
   		$this->updateData($id);
   	}else{
   		$id 				         = $this->input->post('id_p_rumahan');
   		$nama_p_rumahan 	   = $this->input->post('nama_p_rumahan');
   		$deskripsi_p_rumahan = $this->input->post('deskripsi_p_rumahan');
   		$harga_p_rumahan	   = $this->input->post('harga_p_rumahan');
   		$foto_p_rumahan		   = $this->input->post('foto_p_rumahan');
   		$tanggal_upload      = $this->input->post('tanggal_upload');
   		
   		$data=array(
   				'nama_p_rumahan' 		=> $nama_p_rumahan,
   				'deskripsi_p_rumahan' 	=> $deskripsi_p_rumahan,
   				'harga_p_rumahan' 		=> $harga_p_rumahan,
   				'foto_p_rumahan' 		=> $foto_p_rumahan,
   				'tanggal_upload' 		=>$tanggal_upload,
   		);

   		$where = array(
   				'id_p_rumahan'=> $id
   		);

   		$this->model_p_rumahan->update_data('tbl_produk_rumahan',$data,$where);
   		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>Data berhasil diupdate!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
   		redirect('index.php/data_p_rumahan');
   	}
   }

   public function deleteData($id)
   {
   		$where = array('id_p_rumahan' => $id);
   		$this->model_p_rumahan->delete_data($where,'tbl_produk_rumahan');
   		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
  			<strong>Data berhasil dihapus!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
   		redirect('index.php/data_p_rumahan');
   }

   public function _rules()
   {
   		$this->form_validation->set_rules('nama_p_rumahan','nama_p_rumahan', 'required' );
   		$this->form_validation->set_rules('deskripsi_p_rumahan','deskripsi_p_rumahan', 'required' );
   		$this->form_validation->set_rules('harga_p_rumahan','harga_p_rumahan','required' );
   		$this->form_validation->set_rules('foto_p_rumahan','foto_p_rumahan','required' );
   		$this->form_validation->set_rules('tanggal_upload','tanggal_upload','required' );
   }

   public function detail($id){
    $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
    $this->load->model('model_p_rumahan');
    $detail = $this->model_p_rumahan->detail_data($id);
    $data['detail'] = $detail;
    $data['title']="Admin Kulzein | Detail Data Produk Rumahan";
    $data['konten'] = "detail_data_produk_rumahan";
    $this->load->view('dashboard',$data);
   }
}