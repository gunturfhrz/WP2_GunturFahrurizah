<?php
class Mymahasiswa extends CI_Model 
{
    // Method untuk mengambil data mahasiswa dari database
    public function getMahasiswa() 
    {
        $query = $this->db->get('mahasiswa'); // 'mahasiswa' adalah nama tabel di database
        return $query;
    }

    public function simpan($table,$data)
    {
    	$this->db->insert($table,$data);
    }

    public function hapus($table_name,$where)
    {
    	$res=$this->db->delete($table_name,$where);
        return $res;
    }

    public function ubah($where,$table_name)
    {
        $data=$this->db->get_where($table_name, $where);
        return $data;
    }

    public function updateMahasiswa($where,$data,$table_name)
    {
        $this->db->where($where);
        $this->db->update($table_name,$data);
    }
}
