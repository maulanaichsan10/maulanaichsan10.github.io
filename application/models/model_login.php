<?php

class Model_login extends CI_model
{
	public function ambillogin($email,$password)
	{

		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query = $this->db->get('tbl_user');
		if($query->num_rows()>0){
			foreach ($query->result() as $row) {
				$sess = array ('email' => $row->email,
							   'password' => $row->password
				);
			}
			$this->session->set_userdata($sess);
			redirect('index.php/dashboard');
		 }
		 else{
		 	$this->session->set_flashdata('info','<div class="alert alert-success alert-dismissible fade show" role="alert">
  			<strong>Maaf email dan password salah! Mohon di isi dengan benar!</strong>
  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  			<span aria-hidden="true">&times</span>
  			</button>
			</div>');
		 	redirect('index.php/login');
		}
	}

	public function keamanan(){
		$email=$this->session->userdata('email');
		if(empty($email)){
			$this->session->sess_destroy();
			redirect('index.php/login');
		}
	}
	
}