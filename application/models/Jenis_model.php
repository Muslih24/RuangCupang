<?php
    class Jenis_model extends CI_Model{
        function Getdata(){
            return $this->db->get('jenis');
        }
    }
