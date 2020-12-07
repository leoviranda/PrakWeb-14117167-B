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
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
			// $data = array('data_user' => $this->model_model->tampildatauser($where));
			$this->load->view('user/index_user', $data);
		} else {
			$this->session->set_flashdata('message','Please Login!');
			redirect('Login');
		}
    }

    public function hal_edit($id){
		if($this->session->level) {
			$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
			$this->load->view('user/edit', $data);
		} else {
			$this->session->set_flashdata('message','Please Login!');
			redirect('Login');
		}
	}
    public function edit(){
        $id = $this->input->post('id');
		$fname = $this->input->post('fname');

		$data = array('fname' => $fname);
		$where = array('id' => $id);

		$this->model_model->update($where, $data, 'user');
		redirect('user/user');
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
