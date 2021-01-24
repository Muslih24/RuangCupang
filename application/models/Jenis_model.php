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

    function EditJenis($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
