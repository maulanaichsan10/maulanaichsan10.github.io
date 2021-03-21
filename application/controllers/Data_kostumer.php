<?php 

class Data_kostumer extends CI_Controller
{

 public function index()

    {
       $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
        $data['title']="Admin Kulzein | Data Kostumer";
    	$data['konten'] = "data_kostumer";
        $data['kostumer'] = $this->model_kostumer->get_data('tbl_kostumer')->result();
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
public function detail($id){
     $data['user'] = $this->db->get_where('tbl_user',['email' =>
        $this->session->userdata('email')])->row_array();
    $this->load->model('model_kostumer');
    $detail = $this->model_kostumer->detail_data($id);
    $data['detail'] = $detail;
    $data['title']="Admin Kulzein | Detail Data Kostumer";
    $data['konten'] = "detail_data_kostumer";
    $this->load->view('dashboard',$data);
   }


}