<?php

Class register_model extends CI_Model
{
    public function activate($data, $id){
        $this->db->where('users.id', $id);
        return $this->db->update('users', $data);
       }

    public function insert($data)
       {   
           $this->db->insert('user',$data);
           $a = $this->db->insert_id();
           return $a;
       }

       function aktivasi($key){
           $data = array(
               'status' => '1'
           );
           $this->db->where('md5(id_user)', $key);
           $this->db->update('user', $data);
       }
}