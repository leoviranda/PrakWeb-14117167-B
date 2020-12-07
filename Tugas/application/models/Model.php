<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_model {

	public function getUsername($username, $password){
        $user =  $this->db->get_where('user', ['username'=>$username])->row_array();

        if ($user) {
			// if (password_verify($password, $user['password'])) {
				$data = [
					'username' => $user['username'],
					'level' => $user['level']
				];
				$this->session->set_userdata($data);
				if ($user['level'] == 1) {
					redirect('user/index');
				}else {
					redirect('user/user');
				}

			// }else {
			// 	$this->session->set_flashdata('message', 'Wrong password!');
			// 	redirect('login');
			// }
		}else {
			$this->session->set_flashdata('message', 'This username is not registered!');
			redirect('login');
		}
    }

    public function tampildata(){
        $query = $this->db->order_by('id','ASC')->get('user');
        return $query->result();
	}
	
	public function tampildatauser($where){
		$query = $this->db->get_where('user',$where);
		return $query->result();
	}

	public function update($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
    
    public function isLoginSessionExpired(){
        $login_session_duration = 5;
        $current_time = time();
        if(isset($_SESSION['loggedin_time']) and isset($_SESSION['username'])) {
            if((time() - $this->session->userdata('loggedin_time')) > $login_session_duration) {
                return true;
            }
        }
        return false;
    }
}
?>
