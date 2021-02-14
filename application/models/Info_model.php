<?php
class Info_model extends CI_Model
{
    function GetData()
    {
        return $this->db->get('info');
    }

    function AddInfo($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function GetWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function DeleteInfo($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function EditInfo($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
