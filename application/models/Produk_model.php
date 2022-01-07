<?php

Class produk_model extends CI_Model
{
    function produk(){
        $result = $this->db->get('produk');
        return $result;
    }

    function review($id){
        $this->db->select('*');
        $this->db->from('review');
        $this->db->join('user','user.id_user = review.id_user');
        $this->db->where('id_produk', $id);
        $this->db->order_by('id_review','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function insert($tbl,$data)
    {   
        $this->db->insert($tbl,$data);
    }

    function get_produk_id($id_produk){
        $query = $this->db->get_where('produk', array('id_produk' => $id_produk));
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

    public function update($tbl,$key,$args,$data)
    {   
        $this->db->where($key,$args);
        $this->db->update($tbl, $data);     
    }

    function delete($id){
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
    }

    public function getDBy($tbl,$field,$key,$args)
    {   
        $this->db->select($field);
        $this->db->from($tbl);
        $this->db->where($key,$args);
        $query = $this->db->get();  

        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }

    public function get_no_pem()
    {   
        $q = $this->db->query("SELECT MAX(RIGHT(id_transaksi,4)) AS kd_max FROM transaksi",FALSE);
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
				$tmp = ((int)$k->kd_max)+1;
				$kd = sprintf("%04s", $tmp);
			}
        }else{
            $kd = "0001";
        }
		date_default_timezone_set('Asia/Jakarta');
		return date('ym').$kd;
    }

    public function tambah_detail_order($data)
	{
		$this->db->insert('detail_transaksi', $data);
	}

    public function tambah_order($data)
	{
		$this->db->insert('transaksi', $data);
		$id = $this->db->insert_id();
		return (isset($id)) ? $id : FALSE;
	}

    function get($a){
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->like('nama', $a);
        $this->db->or_like('deskripsi', $a);
        $query = $this->db->get()->result();
        return $query;
    }

    public function getDAll($tbl,$field,$order,$args)
    {   
        $this->db->order_by($order, $args);
        $this->db->select($field);
        $this->db->from($tbl);

        $query = $this->db->get();  
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return 0;
        }
    }

    function rating($id){
        $this->db->select("AVG(rating) as total");
        $this->db->where('id_produk',$id);
        return $this->db->from('review')->get();
    }
}