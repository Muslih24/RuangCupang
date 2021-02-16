<?php
class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Backend/SA/Admin_model');
	}
	public function index()
	{
		$data['user'] = $this->Admin_model->getAllUser()->result();
		$this->load->view('Backend/SA/Admin/index', $data);
	}

	public function ProsesAddAdmin()
	{
		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$nama = $this->input->post('nama', true);
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$level = $this->input->post('level', true);
		if ($this->form_validation->run() == FALSE) {
			redirect('Backend/SA/Admin/index');
		} else {
			$data = [
				'nama' => $nama,
				'username' => $username,
				'password' => sha1($password),
				'level' => $level
			];
			$this->Admin_model->addDataUser($data, 'user');
			$this->session->set_flashdata('flash', 'ditambahkan');
			redirect('Backend/SA/Admin/index');
		}
	}

	public function ProsesDeleteAdmin($id)
	{
		$this->Admin_model->deleteDataUser($id);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('Backend/SA/Admin/index');
	}


	function ProsesEditAdmin()
	{


		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		// $id = $this->uri->segment(5);



		if ($this->form_validation->run() == FALSE) {
			redirect('Backend/SA/Admin/index');
		} else {
			$this->Admin_model->editDataUser();
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('Backend/SA/Admin/index');
		}
	}

	function dashboard()
	{
		$this->load->view('Backend/SA/Admin/dashboard');
	}
}
