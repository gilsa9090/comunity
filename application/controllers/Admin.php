<?php 

class Admin extends CI_Controller 
{
    public function index()
    {
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
        $this->load->view('templates/header');
        $this->load->view('pages/role');
        $this->load->view('templates/footer');
    }

    public  function kta(){
        $this->load->view('templates/header');
        $this->load->view('pages/card');
        $this->load->view('templates/footer');
    }


    public  function divisi(){
        $this->load->view('templates/header');
        $this->load->view('pages/divisi');
        $this->load->view('templates/footer');
    }

    public  function anggota(){
        $this->load->view('templates/header');
        $this->load->view('pages/anggota');
        $this->load->view('templates/footer');
    }

    public  function kas(){
        $this->load->view('templates/header');
        $this->load->view('pages/kas');
        $this->load->view('templates/footer');
    }

    public  function news(){
        $this->load->view('templates/header');
        $this->load->view('pages/news');
        $this->load->view('templates/footer');
    }

    public  function gallery(){
        $this->load->view('templates/header');
        $this->load->view('pages/gallery');
        $this->load->view('templates/footer');
    }
}


?>