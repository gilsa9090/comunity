<?php 

class Admin extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DivisiMember_model');
    }

    public function index()
    {
        $data['nama'] = $this->DivisiMember_model->index();
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/admin', $data);
        $this->load->view('templates/footer');
    }

    public function profile()
    {
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/profile', $data);
        $this->load->view('templates/footer');
    }

    public  function role(){
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/role');
        $this->load->view('templates/footer');
    }

    public  function kta(){
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/card');
        $this->load->view('templates/footer');
    }


    public  function anggota(){
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('pages/anggota');
        $this->load->view('templates/footer');
    }

    public  function kas(){
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('pages/kas');
        $this->load->view('templates/footer');
    }

    public  function news(){
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('pages/news');
        $this->load->view('templates/footer');
    }

    public  function gallery(){
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/gallery');
        $this->load->view('templates/footer');
    }
}


?>