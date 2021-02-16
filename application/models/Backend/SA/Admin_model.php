<?php

class Admin_model extends CI_model
{
	public function getAllUser()
	{
		return $query = $this->db->get('user');
	}
	public function addDataUser($data, $table)
	{
		$this->db->insert($table, $data);
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
		$id = $this->input->post('id');
		$nama = $this->input->post('nama', true);
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$level = $this->input->post('level', true);
		$data = [
			'id' => $id,
			'nama' => $nama,
			'username' => $username,
			'password' => sha1($password),
			'level' => $level
		];
		$this->db->where('id', $id);
		$this->db->update('user', $data);
	}
}
