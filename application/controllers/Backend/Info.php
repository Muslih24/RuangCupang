<?php
class Info extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Info_model");
    }
    function index()
    {
        $data['judul'] = 'List of User';
        $data['info'] = $this->Info_model->GetData()->result();
        $this->load->view('templates/header');
        $this->load->view('Backend/info/info_view', $data);
        $this->load->view('templates/footer');
    }

    function AddInfo()
    {
        $this->load->view('templates/header');
        $this->load->view('Backend/Info/Info_add');
        $this->load->view('templates/footer');
    }

    function ProsesAddInfo()
    {
        $this->form_validation->set_rules('info', 'info', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Backend/info/info_add');
        } else {
            $info = $this->input->post('info');
            $data = array('info' => $info);
            $this->Info_model->AddJenis($data, 'info');
            redirect('Backend/Info');
        }
    }

    function EditInfo($id_info)
    {
        $where = ['id_info' => $id_info];
        $data['info'] = $this->Info_model->GetWhere($where, 'info')->result();
        $this->load->view('Backend/Info/Info_edit', $data);
    }

    function UpdateInfo()
    {
        $this->form_validation->set_rules('info', 'info', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Backend/Info/Info_edit');
        } else {
            $id_info = $this->input->post('id_info');
            $info = $this->input->post('info');


            $data = ['info' => $info];
            $where = ['id_info' => $id_info];
            $this->Info_model->EditInfo($where, $data, 'info');
            redirect('Backend/info');
        }
    }

    function DeleteInfo($id_info)
    {
        $where = ['id_info' => $id_info];
        $this->Info_model->DeleteInfo($where, 'info');
        redirect('Backend/Info');
    }
    function DetailInfo($id_info){
     $where = ['id_info' => $id_info];
        $data['info'] = $this->Info_model->GetWhere($where, 'info')->result();
        $this->load->view('Backend/Info/Info_detail', $data);   
    }
}
