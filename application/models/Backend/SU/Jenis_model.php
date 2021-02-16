<?php
class Jenis_model extends CI_Model
{
    function Getdata()
    {
        return $this->db->get('jenis');
    }

    function AddJenis($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function GetWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function DeleteJenis($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function EditJenis()
    {
      $id_jenis = $this->input->post('id_jenis');
      $jenis = $this->input->post('jenis');

      $data = [
        'id_jenis' => $id_jenis,
        'jenis' => $jenis
      ];

        $this->db->where('id_jenis',$id_jenis);
        $this->db->update('jenis', $data);
    }
}
