<?php 

class Gallery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gallery_model');
        $this->load->library('form_validation');
    }



    public function insert()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('caption', 'Caption', 'required');

        if( $this->form_validation->run() == false){
            $data['title'] = 'Tambah Gallery';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/insertForm/gallery', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Gallery_model->insert();
            redirect('admin/gallery');
        }

            
    }

    public  function delete($id)
    {
        $this->Gallery_model->delete($id);
        redirect('admin/gallery');
    }

    public  function detail($id)
    {
            $data['gallery'] = $this->Gallery_model->getById($id);
            $data['title'] = 'Halaman News';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/detail/galery', $data);
            $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('caption', 'Caption', 'required');

        if( $this->form_validation->run() == false){
            $data['gallery'] = $this->Gallery_model->getById($id);
            $data['title'] = 'Edit Gallery';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header', $data);
            $this->load->view('admin/editForm/gallery', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Gallery_model->edit();
            redirect('admin/gallery');
        }

    }
}


?>