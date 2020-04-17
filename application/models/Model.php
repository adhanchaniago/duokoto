<?php
class Model extends CI_Model
{
    // fungsi untuk simpan data
    public function create($table,$object)
    {
        $this->db->insert($table,$object);
    }
    // fungsi untuk menemukan data
    public function find($table,$field,$field_name)
    {
        $this->db->from($table);
        $this->db->where($field, $field_name);
        return $this->db->get();
    }
    // check username dan password user
    public function check_account($username,$password)
    {
        $this->db->from('tb_user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get();
    }
    public function tampil_data()
    {
        $this->db
        ->from('tb_berita')
        ->order_by('id', 'desc');
        return $this->db->get()->result();
    }

    function model_hapus($id)
    {
        // ini model
    $this->db->where('id',$id);
    $this->db->delete('tb_berita');
    } 
     function simpan_berita($object)
     {
        $this->db->insert('tb_berita', $object);
        
    }
    public function model_edit($id)
    {
        $this->db->where('id',$id);
        return $this->db->get('tb_berita')->row_array();
    }
    public function model_edit_simpan($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('tb_berita',$data);


    }
    public function berita_user()
    {
        $this->db->from('tb_berita');
        $this->db->order_by('id', 'desc');
        $this->db->limit(5);
       return $this->db->get()->result();
        
    }
    public function berita_home()
    {
        $this->db->from('tb_berita');
        $this->db->order_by('id', 'desc');
        $this->db->limit(5);
        return $this->db->get()->result();
        
    }
    public function details_berita($id)
    {
        $this->db->where('id',$id);
        $this->db->order_by('id', 'desc');
        return $this->db->get('tb_berita')->result();
    }
    
    

}
