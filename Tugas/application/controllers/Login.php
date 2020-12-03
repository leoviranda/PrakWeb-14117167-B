<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Model');
    }

	public function index()
	{
        if($this->session->userdata('email')){
            redirect('user');
        }
        $this->load->view('login/index');
    }
    
    public function cekLogin(){
        $username = $this->input->post('user_name');
        $password = $this->input->post('password');

        $getUser = $this->Model->getUsername($username);

        if ($getUser) {
            $data = [
                'username'=>$username,
                'loggedin_time'=>time()
            ];
            $this->session->set_userdata($data);
            redirect('User');
        }else{
            $this->session->set_flashdata('message','<p>User tidak terdaftar</p>');
            redirect('Login');
        }
    }
}
