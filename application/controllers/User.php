<?php 
class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$data['judul'] = 'List of User';
		$data['user'] = $this->User_model->getAllUser();
		if ($this->input->post('keyword') )
		{
			$data['user'] = $this->User_model->SearchDataUser();
		}
		//pagination
		$this->load->library('pagination');

		//config
		$config['base_url'] = 'http://localhost/RuangCupang/user/index';
		$config['total_rows'] = $this->User_model->countAllUser();
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
		$data['user'] = $this->User_model->getUserLimit($config['per_page'], $data['start']);

		$this->load->view('templates/header', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['judul'] = 'Form Add Data User';
		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('no_hp', 'Phone Number', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('alamat', 'Address', 'required');
					

		if ($this->form_validation->run() == FALSE ){
		$this->load->view('templates/header', $data);
		$this->load->view('user/add');
		$this->load->view('templates/footer');

		}else{
			$this->User_model->addDataUser();
			$this->session->set_flashdata('flash','ditambahkan');
			redirect('user');
		}
	}

	public function del($id)
	{
		$this->User_model->deleteDataUser($id);
		$this->session->set_flashdata('flash', 'dihapus');
		redirect('user');
	}

	public function detail($id)
	{
		$data['judul'] = 'Detail Data User';
		$data['user'] = $this->User_model->getUserById($id);
		$this->load->view('templates/header', $data);
		$this->load->view('user/detail', $data);
		$this->load->view('templates/footer'); 
	}

		public function edit($id)
	{
		$data['judul'] = 'Form Edit Data User';
		$data['user'] = $this->User_model->getUserById($id);
		$data['level'] = ['Super Admin', 'Admin', 'User'];
		$data['jk'] = ['Perempuan', 'Laki-laki'];


		$this->form_validation->set_rules('nama', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('no_hp', 'Phone Number', 'required|numeric');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('alamat', 'Address', 'required');
					

		if ($this->form_validation->run() == FALSE ){
		$this->load->view('templates/header', $data);
		$this->load->view('user/edit', $data);
		$this->load->view('templates/footer');

		}else{
			$this->User_model->editDataUser();
			$this->session->set_flashdata('flash','Diubah');
			redirect('user');
		}
	}
}
