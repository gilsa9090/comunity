<?php 

class Auth_model extends CI_model {
    public function  register()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1,
            'date_created' => time()
        ];

        $this->db->insert('user', $data);
    }

    public function login(){
      
        }
}

?>