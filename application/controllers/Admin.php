<?php 

class Admin extends CI_Controller 
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/admin');
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