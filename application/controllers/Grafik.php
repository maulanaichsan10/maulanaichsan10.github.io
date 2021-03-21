<?PHP 

class Grafik extends CI_Controller
{
public function index(){
	$data['user'] = $this->db->get_where('tbl_user',['username' =>
        $this->session->userdata('username')])->row_array();

    $data['konten']="grafik";
    $data['title']="Admin Kulzein | Grafik";
    $this->load->view('dashboard',$data);
}
}