<?php
class Jenis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Backend/Admin/Jenis_model");
    }
    function index()
    {
        $data['jenis'] = $this->Jenis_model->getData()->result();
        $this->load->view('Backend/Admin/Jenis/Jenis_view', $data);
    }

    function ProsesAddJenis()
    {
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect('Backend/Admin/Jenis');
        } else {
            $jenis = $this->input->post('jenis');
            $data = array('jenis' => $jenis);
            $this->Jenis_model->AddJenis($data, 'jenis');
            $this->session->set_flashdata('flash', 'ditambahkan');
            redirect('Backend/Admin/Jenis');
        }
    }


    function ProsesEditJenis()
    {
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');

        if ($this->form_validation->run() == FALSE) {
            redirect('Backend/Admin/Jenis');
        } else {
            $this->Jenis_model->EditJenis();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('Backend/Admin/Jenis');
        }
    }

    function DeleteJenis($id_jenis)
    {
        $where = ['id_jenis' => $id_jenis];
        $this->Jenis_model->DeleteJenis($where, 'jenis');
        $this->session->set_flashdata('flash', 'Dihapus');

        redirect('Backend/Admin/Jenis');
    }
    function DetailJenis($id_jenis)
    {
        $where = ['id_jenis' => $id_jenis];
        $data['jenis'] = $this->Jenis_model->GetWhere($where, 'jenis')->result();
        $this->load->view('Backend/Jenis/Jenis_detail', $data);
    }
}
