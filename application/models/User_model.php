<?php

class User_model extends CI_model{
	public function getAllUser()
	{
		return $query = $this->db->get('user')->result_array();

	}
	public function addDataUser()
	{
		$data =[
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"password" => sha1($this->input->post('password', true)),
			"level" => $this->input->post('level', true),
			"no_hp" => $this->input->post('no_hp', true),
			"email" => $this->input->post('email', true),
			"alamat" => $this->input->post('alamat', true),
			"tgl_lahir" => $this->input->post('tgl_lahir', true),
			"jk" => $this->input->post('jk', true)	
		];
		$this->db->insert('user', $data);
	}

	public function deleteDataUser($id)
	{
		
		$this->db->delete('user', ['id' => $id]);
	}

	public function getUserById($id)
	{
		return $this->db->get_where('user', ['id' => $id])->row_array();
	}

	public function editDataUser()
	{

		$id = $this->uri->segment(3);
		$data =[
			"nama" => $this->input->post('nama', true),
			"username" => $this->input->post('username', true),
			"password" => sha1($this->input->post('password', true)),
			"level" => $this->input->post('level', true),
			"no_hp" => $this->input->post('no_hp', true),
			"email" => $this->input->post('email', true),
			"alamat" => $this->input->post('alamat', true),
			"tgl_lahir" => $this->input->post('tgl_lahir', true),
			"jk" => $this->input->post('jk', true)	
		];

		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}

	public function searchDataUser()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('nama', $keyword);
		return $this->db->get('user')->result_array();
	}

	public function getUserLimit($limit, $start)
	{
		return $this->db->get('user', $limit, $start)->result_array();
	}

	public function countAllUser()
	{
		return $this->db->get('user')->num_rows();
	}
}