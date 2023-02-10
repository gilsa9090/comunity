<?php 

class Divisi_model extends CI_Model 
{
    public function insert()
    {
        $data = [
            "nama_divisi" => $this->input->post('nama'),
            "status" => $this->input->post('status')
        ];
    
        $this->db->insert('divisi', $data);
    }

    public function index(){
        return $this->db->get('divisi')->result_array();
    }

    
}



?>