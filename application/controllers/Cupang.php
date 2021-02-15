<?php 
class Cupang extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cupang_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul'] = 'List of Cupang';
		$data['cupang'] = $this->Cupang_model->getAllCupang();
		if ($this->input->post('keyword') )
		{
			$data['cupang'] = $this->Cupang_model->SearchDataCupang();
		}
		$data['start'] = $this->uri->segment(3);
		$this->load->view('templates/header', $data);
		$this->load->view('cupang/index', $data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['judul'] = 'Form Add Data Cupang';
		$this->form_validation->set_rules('model', 'Model', 'required');			

		if ($this->form_validation->run() == FALSE ){
		$this->load->view('templates/header', $data);
		$this->load->view('cupang/add');
		$this->load->view('templates/footer');

		}else{
			$this->Cupang_model->addDataCupang();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('cupang');
		}
	}

	public function del($id)
	{
		$this->Cupang_model->deleteDataCupang($id);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('cupang');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Data Cupang';
		$data['cupang'] = $this->Cupang_model->getCupangById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('cupang/detail', $data);
		$this->load->view('templates/footer'); 
	}

		public function edit($id)
	{
		$data['judul'] = 'Form Edit Data Cupang';
		$data['cupang'] = $this->Cupang_model->getCupangById($id);

		$this->form_validation->set_rules('cupang', 'Cupang', 'required');			

		if ($this->form_validation->run() == FALSE ){
		$this->load->view('templates/header', $data);
		$this->load->view('cupang/edit', $data);
		$this->load->view('templates/footer');

		}else{
			$this->Cupang_model->editDataCupang();
			$this->session->set_flashdata('flash','Diubah');
			redirect('cupang');
		}
	}
}
