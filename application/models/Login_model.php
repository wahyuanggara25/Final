<?php
class Login_model extends CI_Model{

	function validate($username,$password){
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$result = $this->db->get('users',1);
		return $result;
	}

	public function isadmin()
	{
		if($this->session->userdata('Akses')==='admin'){
			return true;
		}
		else{
			return false;
		}
	}
}
