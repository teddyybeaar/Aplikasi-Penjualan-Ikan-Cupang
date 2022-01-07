<?php

Class Login_model extends CI_Model
{
    function cek($table, $where){
        return $this->db->get_where($table, $where);
    }
}
?>