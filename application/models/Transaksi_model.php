<?php

Class transaksi_model extends CI_Model
{
    function verifikasi(){
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('produk', 'produk.id_produk = transaksi.id_produk');
        $this->db->order_by('id_transaksi','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function update($tbl,$key,$args,$data)
    {   
        $this->db->where($key,$args);
        $this->db->update($tbl, $data);     
    }

    function pembelian($id){
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('produk', 'produk.id_produk = transaksi.id_produk');
        $this->db->where('id_user', $id);
        $this->db->order_by('id_transaksi','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function insert($tbl,$data)
    {   
        $this->db->insert($tbl,$data);
    }

    function pengembalian($id){
        $this->db->select('*');
        $this->db->from('transaksi');
        $this->db->join('produk', 'produk.id_produk = transaksi.id_produk');
        $this->db->where('id_transaksi', $id);
        $query = $this->db->get();
        return $query;
    }

    public function getData($tbl,$field,$key,$args)
    {   
        $this->db->select($field);
        $this->db->from($tbl);
        $this->db->where($key,$args);
        $query = $this->db->get();  

        if($query->num_rows()>0){
            return $query->row_array();
        }else{
            return 0;
        }
    }
}