<?php

class Cupang_model extends CI_model{
	public function getAllCupang()
	{
		return $query = $this->db->get('cupang')->result_array();

	}
	public function addDataCupang()
	{
		$data =[
			"model" => $this->input->post('model', true),
			];
		$this->db->insert('cupang', $data);
	}

	public function deleteDataCupang($id)
	{
		
		$this->db->delete('cupang', ['id_cupang' => $id]);
	}

	public function getCupangById($id)
	{
		return $this->db->get_where('cupang', ['id_cupang' => $id])->row_array();
	}

	public function editDataModel()
	{

		$id = $this->uri->segment(3);
		$data =[
			"model" => $this->input->post('model', true),
		];

		$this->db->where('id_cupang', $id_cup);
		$this->db->update('cupang', $data);
	}

	public function searchDataCupang()
	{
		$keyword = $this->input->post('keyword', true);
		$this->db->like('model', $keyword);
		return $this->db->get('cupang')->result_array();
	}

	public function getCupangLimit($limit, $start)
	{
		return $this->db->get('cupang', $limit, $start)->result_array();
	}

	public function countAllCupang()
	{
		return $this->db->get('cupang')->num_rows();
	}
}