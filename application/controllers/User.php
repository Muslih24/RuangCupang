<?php 
class User extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->helper('url');
	}
	public function index()
	{
		
		$data['judul'] = 'Daftar Mahasiswa';
		$data['user'] = $this->User_model->getAllUser();
		$this->load->view('templates/header', $data);
		$this->load->view('user/index', $data);
		$this->load->view('templates/footer');
	}
}
