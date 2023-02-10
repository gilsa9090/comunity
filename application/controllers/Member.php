<?php 


class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DivisiMember_model');
        $this->load->model('Divisi_model');
    }

    public function index()
    {
        $data['nama'] = $this->DivisiMember_model->index();
        $data['title'] = 'Halaman Member';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header2', $data);
        $this->load->view('member/pages/member', $data);
        $this->load->view('templates/footer');
    }

    public function kta()
    {
        $data['nama'] = $this->DivisiMember_model->index();
        $data['title'] = 'Halaman Member';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header2', $data);
        $this->load->view('member/pages/card', $data);
        $this->load->view('templates/footer');
    }

    public function news()
    {
        $data['nama'] = $this->DivisiMember_model->index();
        $data['title'] = 'Halaman Member';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header2', $data);
        $this->load->view('member/pages/news', $data);
        $this->load->view('templates/footer');
    }
    
    public function kas()
    {
        $data['nama'] = $this->DivisiMember_model->index();
        $data['title'] = 'Halaman Member';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header2', $data);
        $this->load->view('member/pages/kas', $data);
        $this->load->view('templates/footer');
    }

    public function gallery()
    {
        $data['nama'] = $this->DivisiMember_model->index();
        $data['title'] = 'Halaman Member';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header2', $data);
        $this->load->view('member/pages/gallery', $data);
        $this->load->view('templates/footer');
    }
    
    

    public  function divisi(){
        $data['divisi'] = $this->Divisi_model->index();
        $data['title'] = 'Halaman Divisi';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header2',$data);
        $this->load->view('member/pages/divisi', $data);
        $this->load->view('templates/footer');
    }

    public function divisiMember()
    {
            $data['member'] = $this->DivisiMember_model->index();
            $data['title'] = 'Halaman Admin';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header2',$data);
            $this->load->view('member/pages/divisiMember', $data);
            $this->load->view('templates/footer');
    }



}


?>