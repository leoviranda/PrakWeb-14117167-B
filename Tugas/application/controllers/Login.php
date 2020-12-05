<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Model', 'model_model');
    }

	public function index(){
        if($this->session->userdata('email')){
            redirect('user');
        }
        $this->load->view('login/index');
    }
    
    public function cekLogin(){
        $username = $this->input->post('user_name');
        $password = $this->input->post('password');

        $this->model_model->getUsername($username, $password);
        // $getUser = $this->model_model->getUsername($username);

        // if ($getUser) {
        //     $data = [
        //         'username'=>$username,
        //         'loggedin_time'=>time()
        //     ];
        //     $this->session->set_userdata($data);
        //     redirect('user');
        // }else{
        //     $this->session->set_flashdata('message','<p>User tidak terdaftar</p>');
        //     redirect('login');
        // }
    }
}
