<?php 

class News extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('News_model');
        $this->load->library('form_validation');
        check();
    }

    public  function delete($id)
    {
        $this->News_model->delete($id);
        redirect('admin/news');
    }

    public  function detail($id)
    {
            $data['news'] = $this->News_model->getById($id);
            $data['title'] = 'Halaman News';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/detail/news', $data);
            $this->load->view('templates/footer');
    }

    public  function insert()
    {
        $this->form_validation->set_rules('berita', 'Berita', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if( $this->form_validation->run() == false){
            $data['title'] = 'Halaman News';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/insertForm/news', $data);
            $this->load->view('templates/footer');
        } else {
            $this->News_model->insert();
            redirect('admin/news');
        }
        
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('berita', 'Berita', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        if( $this->form_validation->run() == false){
            $data['news'] = $this->News_model->getById($id);
            $data['title'] = 'Edit Gallery';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/editForm/news', $data);
            $this->load->view('templates/footer');
        } else {
            $gallery = $this->News_model->getById($id);

        if ($this->input->method() == 'post') {
            $berita = $this->input->post('berita');
            $isi = $this->input->post('isi');
            $gambar = $this->input->post('gambar');

            if (!empty($_FILES['gambar']['name'])) {
                $config['upload_path'] = './assets/image/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $upload_data = $this->upload->data();
                    $gambar = $upload_data['file_name'];
                } else {
                    echo "error";
                    return;
                }
            }
            $this->News_model->edit($id, array(
                'berita' => $berita,
                'isi' => $isi,
                'gambar' => $gambar
            ));

            redirect('admin/news');
        } else {
            echo "error";
        }
        }

    }
}

?>