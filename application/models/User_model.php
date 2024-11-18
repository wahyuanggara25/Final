<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
	private $_table = "users";
	public $ID;
	public $JenisKelamin;
	public $Nama;
    public $Username;
    public $Password;
    public $Akses;
    public $TanggalLahir;

	public function rules()
	{
		return [
			['field' => 'JenisKelamin',
				'label' => 'JenisKelamin',
				'rules' => 'required'],

			['field' => 'Nama',
				'label' => 'Nama',
				'rules' => 'required'],

				['field' => 'Username',
					'label' => 'Username',
					'rules' => 'required'],

					['field' => 'Password',
						'label' => 'Password',
						'rules' => 'required'],
										
								['field' => 'TanggalLahir',
								'label' => 'TanggalLahir',
								'rules' => 'required']
		];
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getByID($ID)
	{
		return $this->db->get_where($this->_table, ["ID" => $ID])->row();
	}

	public function add(){
		$post = $this->input->post();
		$this->JenisKelamin = $post["JenisKelamin"];
		$this->Nama = $post["Nama"];
		$this->Username = $post["Username"];
		$this->Password = $post["Password"];
		$this->Akses = $post["Akses"];
		$this->TanggalLahir = $post["TanggalLahir"];
		$this->db->insert($this->_table, $this);
	}

	public function update()
    {
		$post = $this->input->post();
		$user = $this->getByID($post["uID"]);
		$this->ID = $post["uID"];
        $this->JenisKelamin = $post["JenisKelamin"];
        $this->Nama = $post["Nama"];
		$this->TanggalLahir = $post["TanggalLahir"];
		$this->Akses = $post["Akses"];
		$this->Username = $user->Username;
		$this->Password = $user->Password;
        return $this->db->update($this->_table, $this, array('ID' => $post['uID']));
    }

	public function delete($ID)
	{
		return $this->db->delete($this->_table, array("ID" => $ID));
	}
}
