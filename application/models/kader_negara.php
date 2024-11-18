<?php defined('BASEPATH') or exit('No direct script access allowed');

class kader_negara extends CI_Model
{
	private $_table = "kader_negara";

	public $id;
	public $NBP;
	public $Email;
	public $Nama;
	public $Kampus;
	public $Kelamin;
	public $Alamat;
	public $Status;


	public function rules()
	{
		return [
			[
				'field' => 'NBP',
				'label' => 'NBP',
				'rules' => 'required'
			],

			[
				'field' => 'Email',
				'label' => 'Email',
				'rules' => 'required'
			],

			[
				'field' => 'Nama',
				'label' => 'Nama',
				'rules' => 'required'
			],

			[
				'field' => 'Kampus',
				'label' => 'Kampus',
				'rules' => 'required'
			],

			[
				'field' => 'Kelamin',
				'label' => 'Kelamin',
				'rules' => 'required'
			],

			[
				'field' => 'Alamat',
				'label' => 'Alamat',
				'rules' => 'required'
			],

			[
				'field' => 'Status',
				'label' => 'Status',
				'rules' => 'required'
			]
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, ["id" => $id])->row();
	}

	public function getByIdFilter($id)
	{
		return $this->db->get_where($this->_table, ["id" => $id])->result();
	}

	public function add()
	{
		$post = $this->input->post();
		$this->NBP = $post["NBP"];
		$this->Email = $post["Email"];
		$this->Nama = $post["Nama"];
		$this->Kampus = $post["Kampus"];
		$this->Kelamin = $post["Kelamin"];
		$this->Alamat = $post["Alamat"];
		$this->Status = $post["Status"];

		$this->db->insert($this->_table, $this);
	}

	
	public function update()
    {
		$post = $this->input->post();
		$this->id = $post["id"];
        $this->NBP = $post["NBP"];
		$this->Email = $post["Email"];
		$this->Nama = $post["Nama"];
		$this->Kampus = $post["Kampus"];
		$this->Kelamin = $post["Kelamin"];
		$this->Alamat = $post["Alamat"];
		$this->Status = $post["Status"];
        return $this->db->update($this->_table, $this, array('id' => $post['iid']));
    }

	public function delete($id)
	{
		return $this->db->delete($this->_table, array("id" => $id));
	}
}
