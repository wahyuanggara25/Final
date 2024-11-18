<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		if($this->session->userdata('logged_in') !== TRUE){
			echo "<script>console.log('not logged in')</script>";
			// buka view / halaman login jika status pada session tidak login atau sudah logout/session timeout
			$this->load->view('login_page');
		}
		else{
			echo "<script>console.log(' logged in')</script>";
			redirect('home');
		}
	}

	function auth(){
		$username    = $this->input->post('username',TRUE);
		$password = $this->input->post('password',TRUE);
		$validate = $this->login_model->validate($username,$password);
		if($validate->num_rows() > 0){
			$data  = $validate->row_array();
			$username  = $data['username'];
			$name = $data['nama'];
			$Akses = $data['Akses'];
			$sesdata = array(
				'username'  => $username,
				'name'     => $name,
				'role'     => $Akses,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			redirect('home');
		}else{
			echo $this->session->set_flashdata('Username or Password is Wrong');
			redirect('login'); 
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
