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
		//pagination
		$this->load->library('pagination');

		//config
		$config['base_url'] = 'http://localhost/RuangCupang/cupang/index';
		$config['total_rows'] = $this->Cupang_model->countAllCupang();
		$config['per_page'] = 1;

		//styling
		$config['full_tag_open'] = '<nav><ul class="pagination">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = ' <li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = ' <li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = ' <li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = ' <li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		//initialize
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['cupang'] = $this->Cupang_model->getCupangLimit($config['per_page'], $data['start']);

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
