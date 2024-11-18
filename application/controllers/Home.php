<?php
class Home extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('login');
		}
	}

	public function index()
	{
		$data["controller"] = $this;
		$data["user_data"] = $this->user_model->getAll();
		$data['curruser'] = $this->session->userdata('name');
		
		$this->render_page("home_page", $data);
	}

	public function CurrentPage(){
		return $this->router->class;
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
