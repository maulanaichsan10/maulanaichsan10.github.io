<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {

        $this->load->view('login');
        // $this->_rules();

        // if ($this->form_validation->run()==FALSE) {
        //     $this->load->view('login');
        // }else {
        //     $email = $this->input->post('email');
        //     $password = $this->input->post('password');
        // } 
    }
    public function ceklogin()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $this->load->model('model_login');
        $this->model_login->ambillogin($email,$password);

    }
    public function logout()
    {
        $this->session->set_userdata('email',FALSE);
        $this->session->sess_destroy();
        
        redirect('index.php/login');
    }

    // public function _rules()
    // {
    //     $this->form_validation->set_rules('email','email','required');
    //     $this->form_validation->set_rules('password','password','required');

    // }
}
