<?php 

class DivisiMember_model extends CI_Model
{
    public function getName(){
        return $this->db->get('user')->result_array();
    }

    public function getDivisi(){
        return $this->db->get('divisi')->result_array();
    }

    public function desc(){
        return $this->db->get('divisi_member')->row_result();
    }

    public function insert(){
        $data = [
            "user_id" => $this->input->post('nama'),
            "divisi_id" => $this->input->post('divisi'),
            "status" => $this->input->post('status'),
            "deskripsi" => $this->input->post('deskripsi')
        ];

        $this->db->insert('divisi_member', $data);
    }

    public function index(){
        $this->db->select('*');
        $this->db->from('divisi_member');
        $this->db->join('user', 'user.id = divisi_member.user_id');
        $this->db->join('divisi', 'divisi.id = divisi_member.divisi_id');
        $query = $this->db->get();

        return $query->result_array();
    }

    public  function getById($id){
        $query = $this->db->get_where('divisi_member', ['id' => $id]);

        return $query->row();
    }

    public function edit($id){
        $data = [
            "id" => $this->input->post('id'),
            "user_id" => $this->input->post('nama'),
            "divisi_id" => $this->input->post('divisi'),
            "status" => $this->input->post('status'),
            "deskripsi" => $this->input->post('deskripsi')
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('divisi_member', $data);
    }

}

?>