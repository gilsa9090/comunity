<?php 

class Gallery_model extends CI_Model
{

    public function index()
    {
        return $this->db->get('gallery')->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where('gallery', ['id' => $id]) -> row();
    }

    public  function delete($id)
    {
        $this->db->delete('gallery', ['id' => $id]);
    }

    public function insert()
    {
        $gambar = $_FILES['gambar']['name'];

        if ($gambar) {
            $config['upload_path'] = './assets/image/';
            $config['allowed_types'] = 'png|jpg|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $new_gambar = $this->upload->data('file_name');
            } else {
                echo "Error";
            }
        }

        $data = [
            "judul" => $this->input->post('judul'),
            "gambar" => $gambar,
            "caption" => $this->input->post('caption')

        ];
    
        $this->db->insert('gallery', $data);
    }

    public function edit($id, $data)
    {

        $this->db->where('id', $id);
        $this->db->update('gallery', $data);
    }
    
}



?>