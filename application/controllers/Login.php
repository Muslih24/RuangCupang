<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('Auth/Login');
	}

	function ProsesLogin()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);

		$cek = $this->db->query("SELECT * FROM user WHERE username = '" . $username . "' AND password = '" . sha1($password) . "'");
		if ($cek->num_rows() > 0) {
			$asd = $cek->row_array();
			$data_session = array(
				'nama' => $username,
				'level' => $asd['level'],
				'status' => 'login'
			);

			$this->session->set_userdata($data_session);
			if ($this->session->userdata('level') == 'superadmin') {

				redirect(base_url('Backend/SA/Admin/dashboard'));
			} elseif ($this->session->userdata('level') == 'admin') {

				redirect(base_url('Backend/Admin/Cupang'));
			}
		} else {
			echo "Username dan password salah !";
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Auth/Login'));
	}
}
