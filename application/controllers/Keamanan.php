 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keamanan extends CI_Controller {
	public function index()
	{
		$this->load->model('model_login');
		$this->model_login->keamanan();
		$this->load->view('dashboard');
	}
}
