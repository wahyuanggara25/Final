<?php
class User extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('user_model');
        $this->load->library('form_validation');
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('login');
		}
	}

	public function index()
	{
		$data["controller"] = $this;
		$data['curruser'] = $this->session->userdata('name');
		$data["user_data"] = $this->user_model->getAll();
		$this->render_page("user_page", $data);
	}

	public function adduser(){
		$model = $this->user_model;
		$data["controller"] = $this;
		$data['curruser'] = $this->session->userdata('name');
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());

        if ($validation->run()) {
            $model->add();
            $this->session->set_flashdata('success', 'Data added successfully!');
        }
        $this->render_page("adduser_page", $data);
    }
    
    public function edit($uid){
		$model = $this->user_model;
		$data["controller"] = $this;
		$data['curruser'] = $this->session->userdata('name');
		$data["user"] = $model->getById($uid);
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());

        if ($validation->run()) {
            $model->update();
            $this->session->set_flashdata('success', 'Data updated successfully!');
        }
        $this->render_page("edituser_form", $data);
	}
	
	public function delete($uid){
		if($this->user_model->delete($uid)){
			redirect("user");
			$this->session->set_flashdata('success', 'User deleted successfully!');
		}
	}

	public function CurrentPage(){
		return $this->router->class;
	}

	public function isAdmin()
	{
		if($this->session->userdata('role')==='admin'){
			return true;
		}
		else{
			return false;
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
