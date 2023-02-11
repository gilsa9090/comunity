<?php 

class News_model extends CI_Model
{

    public function index()
    {
        return $this->db->get('news')->result_array();
    }

    public function insert()
    {
        $gambar = $_FILES['gambar']['name'];

        if ($gambar) {
            $config['upload_path'] = './assets/image';
            $config['allowed_types'] = 'png|jpg|jpeg';
            
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $new_gambar = $this->upload->data('file_name');
            } else {
                echo "Error";
            }
        }

        $data = [
            "berita" => $this->input->post('berita'),
            "gambar" => $gambar,
            "isi" => $this->input->post('isi')

        ];
    
        $this->db->insert('news', $data);
    }
    
}



?>