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
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Backend/Jenis/Jenis_add');
        } else {
            $jenis = $this->input->post('jenis');
            $data = array('jenis' => $jenis);
            $this->Jenis_model->AddJenis($data, 'jenis');
            redirect('Backend/Jenis');
        }
    }

    function EditJenis($id_jenis)
    {
        $where = ['id_jenis' => $id_jenis];
        $data['jenis'] = $this->Jenis_model->GetWhere($where, 'jenis')->result();
        $this->load->view('Backend/Jenis/Jenis_edit', $data);
    }

    function UpdateJenis()
    {
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Backend/Jenis/Jenis_edit');
        } else {
            $id_jenis = $this->input->post('id_jenis');
            $jenis = $this->input->post('jenis');


            $data = ['jenis' => $jenis];
            $where = ['id_jenis' => $id_jenis];
            $this->Jenis_model->EditJenis($where, $data, 'jenis');
            redirect('Backend/Jenis');
        }
    }

    function DeleteJenis($id_jenis)
    {
        $where = ['id_jenis' => $id_jenis];
        $this->Jenis_model->DeleteJenis($where, 'jenis');
        redirect('Backend/Jenis');
    }
}
