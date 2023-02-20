<?php 

class Kas_model extends CI_Model
{
    public function index(){
        $id = 2;
        return $this->db->get_where('kas_master', ['id' => $id]) -> row();
    }

    public function getBulan()
    {
        return $this->db->get('bulan')->result_array();
    }

    public function insert()
    {

        $id = 2;

        $data = [
            "nominal" => $this->input->post('nominal'),
        ];
    
        $this->db->where('id', $id);
        $this->db->update('kas_master', $data);
    }

    public function bayar()
    {

        $data = [
            "user_id" => $this->input->post('user_id'),
            "bulan_id" => $this->input->post('bulan_id'),
            "status" => $this->input->post('status'),
        ];
    
        $this->db->insert('kas', $data);
    }

    public function laporan()
    {
        $this->db->select('*');
        $this->db->from('kas');
        $this->db->join('user', 'user.id = kas.user_id');
        $this->db->join('bulan', 'bulan.id = kas.bulan_id');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function sum(){
        $this->db->select_sum('status');
        $query = $this->db->get('kas');
        return $query->row()->status;
    }
}


?>