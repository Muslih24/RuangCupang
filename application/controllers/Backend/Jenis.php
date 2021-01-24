<?php
class Jenis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Jenis_model");
    }
    function index()
    {
        $data['jenis'] = $this->Jenis_model->getData()->result();
        $this->load->view('Backend/Jenis/Jenis_view', $data);
    }

    function AddJenis()
    {
        $this->load->view('Backend/Jenis/Jenis_add');
    }

    function ProsesAddJenis()
    {
        $jenis = $this->input->post('jenis');

        $data = ['jenis' => $jenis];

        print_r($data);
    }
}
