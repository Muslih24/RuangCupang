<?php
class Cupang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Backend/SA/Cupang_model');
		$this->load->model('Backend/SA/Jenis_model');
	}
	public function index()
	{
		$data['jeniscupang'] = $this->Jenis_model->getData()->result();
		$data['cupang'] = $this->Cupang_model->getAllCupang()->result();
		$this->load->view('Backend/SA/Cupang/cupang_view', $data);
	}
	public function ProsesEditCupang()
	{
		$this->session->set_flashdata('message', 'Belum Bisa');
		redirect("Backend/SA/Cupang");
	}
	public function ProsesAddCupang()
	{

		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';

		if ($_FILES['gambar']['name'] != "") {
		};
		$new = explode(".", $_FILES['gambar']['name']);
		$ext = end($new);
		$rename = date("YmdHis");
		$config['file_name'] = $rename;
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('gambar')) {
			$this->session->set_flashdata('Gagal');
			redirect("Backend/SA/Cupang");
		} else {
			$data = [
				'nama_cupang' => $this->input->post('nama_cupang'),
				'id_jenis' => $this->input->post('id_jenis'),
				'gambar' => $rename . "." . $ext,
			];
			$this->Cupang_model->addDataCupang($data, 'cupang');
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect("Backend/SA/Cupang");
			//
			// $this->db->insert('tb_peraturan',$data);
			// $this->M_arsip->log(array(
			// 		'ket'=>$this->session->userdata('nama')." telah menambah data arsip ",
			// 		'datetime'=>date('YmdHis'),
			// 		'user'=>$this->session->userdata('nama')
			// 		));
			// redirect(base_url('admin/C_arsip'));
		}
	}

	public function ProsesDeleteCupang($id)
	{
		$this->Cupang_model->deleteDataCupang($id);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect("Backend/SA/Cupang");
	}
}
