<?php
class Incomingitem extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('kader_negara');
        $this->load->library('form_validation');
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('login');
		}
	}

	public function tambahdata (){
		$model = $this->kader_negara;
		$data["controller"] = $this;
		$data['curruser'] = $this->session->userdata('name');
		$data["kader_negara_data"] = $model->getAll();
        $validation = $this->form_validation;
        $validation->set_rules($this->kader_negara->rules());

        if ($validation->run()) {
            $this->kader_negara->add();
            $this->session->set_flashdata('success', 'Data added successfully!');
        }
        $this->render_page("kader_negara_page", $data);
    }

	public function index()
	{
		$data["controller"] = $this;
		$data['curruser'] = $this->session->userdata('name');
		$data["kader_negara_data"] = $this->kader_negara->getAll();
		$this->render_page("kader_negara_page", $data);
	}
    
	public function CurrentPage(){
		return $this->router->class;
	}

	public function getDetailBarangIndex($detailbarang_data, $id_barang){
		for($i = 0; $i < sizeof($detailbarang_data); $i++){
			if (strpos($detailbarang_data[$i]->id_barang, $id_barang) !== false) {
				$arrIndex = $i;
			break;
			}
		}
		return $arrIndex;
	}

	public function edit($id){
		$model = $this->barangmasuk_model;
		$data["controller"] = $this;
		$data['curruser'] = $this->session->userdata('name');
		$data["incoming_data"] = $model->getById($id);
        $validation = $this->form_validation;
        $validation->set_rules($model->rules());

        if ($validation->run()) {
			$model->update();
            $this->session->set_flashdata('success', 'Data updated successfully!');
			redirect('incomingitem');
        }
        $this->render_page("editincomingitem_page", $data);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
