<?php 

class Admin extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DivisiMember_model');
        $this->load->model('Card');
        $this->load->model('News_model');
        $this->load->model('Gallery_model');
    }

    public function index()
    {
        $data['news'] = $this->News_model->index();
        $data['nama'] = $this->DivisiMember_model->index();
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/pages/admin', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/pages/profile', $data);
        $this->load->view('templates/footer');
    }

    public  function role(){
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/pages/role');
        $this->load->view('templates/footer');
    }

    public  function kta($id){
        $data['nama'] = $this->Card->users($id);
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/pages/card', $data);
        $this->load->view('templates/footer');
    }


    public  function anggota(){
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('admin/pages/anggota');
        $this->load->view('templates/footer');
    }

    public  function kas(){
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('admin/pages/kas');
        $this->load->view('templates/footer');
    }

    public  function news(){
        $data['news'] = $this->News_model->index();
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('admin/pages/news');
        $this->load->view('templates/footer');
    }

    public  function gallery(){
        $data['gallery'] = $this->Gallery_model->index();
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/pages/gallery');
        $this->load->view('templates/footer');
    }
}


?>