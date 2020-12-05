<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('Model', 'model_model');
    }

	public function index(){
        if($this->session->level) {
			$data = array('data_user' => $this->model_model->tampildata());
			$this->load->view('user/index', $data);
		} else {
			$this->session->set_flashdata('message','Please Login!');
			redirect('Login');
		}
    }

    public function user(){
        if($this->session->level) {
			$data = array('data_user' => $this->model_model->tampildata());
			$this->load->view('user/index', $data);
		} else {
			$this->session->set_flashdata('message','Please Login!');
			redirect('Login');
		}
    }
    
    public function logout(){
        if ($this->session->flashdata('message') != NULL) {
            $this->session->set_flashdata('message', '<p>Login sesi telah habis, silahkan login kembali</p>');
            $this->session->unset_userdata('username');
            redirect('login');
        }else {
            $this->session->set_flashdata('message', '<p>Sukses logout</p>');
            $this->session->unset_userdata('username');
            redirect('login');
        }
    }
}
