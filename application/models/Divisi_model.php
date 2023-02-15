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

    public function getById($id)
    {
        return $this->db->get_where('divisi', ['id' => $id]) -> row();
    }

    public  function delete($id)
    {
        $this->db->delete('divisi', ['id' => $id]);
    }

    public function edit()
    {
        $data = [
            "nama_divisi" => $this->input->post('nama'),
            "status" => $this->input->post('status')
        ];
    
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('divisi', $data);
    }

    
}



?>