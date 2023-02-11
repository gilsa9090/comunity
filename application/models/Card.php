<?php

class Card extends CI_Model
{
    public function users($id) 
    {
        $this->db->select('*');
        $this->db->from('divisi_member');
        $this->db->join('user', 'user.id = divisi_member.user_id');
        $this->db->join('divisi', 'divisi.id = divisi_member.divisi_id');
        $this->db->where('user.id', $id);
        $query = $this->db->get();

        return $query->row();
    }
    
}



?>