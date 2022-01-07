<?php

Class User_model extends CI_Model
{
    function getData($tbl,$field,$key,$args){
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

    function admin(){
        $return = $this->db->get('admin');
        return $return;
    }

    function user(){
        $return = $this->db->get('user');
        return $return;
    }

    function kontak(){
        $return = $this->db->get('kontak');
        return $return;
    }

    function insert($tbl,$data){
        $this->db->insert($tbl,$data);
    }

    public function update($tbl,$key,$args,$data)
    {   
        $this->db->where($key,$args);
        $this->db->update($tbl, $data);     
    }

    function delete($id,$key,$tbl){
        $this->db->where($key, $id);
        $this->db->delete($tbl);
    }

    function chart(){
      //  $this->db->select("DAY(tanggal_pesan) as month"); //
      $this->db->select("SUM(qty) as total");
      $this->db->select('EXTRACT(YEAR FROM tanggal_pesan) as thn ',date('Y'));
      $this->db->from('transaksi');
      $this->db->join('detail_transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
      $this->db->where('status', 'selesai');
      $this->db->group_by('EXTRACT(YEAR FROM tanggal_pesan)',date('Y'));
     $result = $this->db->get();
     return $result;
    }

    function chart2(){
        //  $this->db->select("DAY(tanggal_pesan) as month"); //
        $this->db->select("sum(qty) as total");
        $this->db->select(' tanggal_pesan as thn ',date('y-m-d'));
        $this->db->from('transaksi');
        $this->db->join('detail_transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->where('status', 'selesai');
        $this->db->group_by(' tanggal_pesan',date('y-m-d'));
       $result = $this->db->get();
       return $result;
      }

      function chart3(){
        //  $this->db->select("DAY(tanggal_pesan) as month"); //
        $this->db->select("SUM(qty) as total");
        $this->db->select('EXTRACT(YEAR_MONTH FROM tanggal_pesan)  as thn ',date(''));
        $this->db->from('transaksi');
        $this->db->join('detail_transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->where('status', 'selesai');
        $this->db->group_by('EXTRACT(MONTH FROM tanggal_pesan)',date('M'));
       $result = $this->db->get();
       return $result;
      }

    function total(){
        $this->db->select("SUM(total) as total");
        $this->db->from('transaksi');
        $this->db->join('detail_transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->where('status', 'selesai');
        return $this->db->get();
    }

    function profil($id){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user', $id);
        return $this->db->get();
    }

    function trans(){
        $this->db->select("count(*) as total");
        $this->db->where('status', 'selesai');
        return $this->db->from('transaksi')->get();
    }

    function users(){
        $this->db->select("count(*) as total");
        return $this->db->from('user')->get();
    }

    function jual(){
        $this->db->select("sum(qty) as total");
        $this->db->from('detail_transaksi');
        $this->db->join('transaksi', 'transaksi.id_transaksi = detail_transaksi.id_transaksi');
       $this->db->where('status', 'selesai');
       $result = $this->db->get();
      return $result;
    }
}
?>