<?php 

class Admin extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DivisiMember_model');
        $this->load->model('Card_model');
        $this->load->model('News_model');
        $this->load->model('Gallery_model');
        $this->load->model('Kas_model');
        check();
        
    }

    public function index()
    {
        $data['balance'] = $this->Kas_model->sum();
        $data['news'] = $this->News_model->index();
        $data['nama'] = $this->DivisiMember_model->index();
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('admin/pages/admin', $data);
        $this->load->view('templates/footer');
    }


    public function landing()
    {
        $data['gallery'] = $this->Gallery_model->index();
        $data['news'] = $this->News_model->index();
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('admin/landing', $data);
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
        $data['nama'] = $this->DivisiMember_model->detail($id);
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
        $data['kas'] = $this->Kas_model->index();
        $data['bulan'] = $this->Kas_model->getBulan();
        $data['nama'] = $this->DivisiMember_model->getName();
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('admin/pages/kas', $data);
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