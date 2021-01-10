<?php 

class User_model extends CI_model{
	public function getAllUser()
	{
		return $query = $this->db->get('user')->result_array();

	}
}