<?php 


class Member extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DivisiMember_model');
        $this->load->model('Divisi_model');
        $this->load->library('Pdf');
        $this->load->model('Card_model');
        $this->load->model('Kas_model');
        $this->load->model('Gallery_model');
        $this->load->model('News_model');
        check();
    }

    public function index()
    {
        $data['balance'] = $this->Kas_model->sum();
        $data['news'] = $this->News_model->index();
        $data['nama'] = $this->DivisiMember_model->index();
        $data['title'] = 'Halaman Member';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header2', $data);
        $this->load->view('member/pages/member', $data);
        $this->load->view('templates/footer');
    }

    public  function kta($id){
        $data['nama'] = $this->Card_model->detail($id);
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header2', $data);
        $this->load->view('member/pages/card', $data);
        $this->load->view('templates/footer');
    }

    public function news()
    {
        $data['news'] = $this->News_model->index();
        $data['title'] = 'Halaman Member';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header2', $data);
        $this->load->view('member/pages/news', $data);
        $this->load->view('templates/footer');
    }
    
    public  function Newsdetail($id)
    {
            $data['news'] = $this->News_model->getById($id);
            $data['title'] = 'Halaman News';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header2', $data);
            $this->load->view('member/detail/news', $data);
            $this->load->view('templates/footer');
    }
    
    public function kas()
    {
            $data['bulan'] = $this->Kas_model->getBulan();
            $data['nama'] = $this->Kas_model->laporan();
            $data['title'] = 'Halaman Laporan';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header2', $data);
            $this->load->view('member/pages/kas', $data);
            $this->load->view('templates/footer');
    }

    public function gallery()
    {
        $data['gallery'] = $this->Gallery_model->index();
        $data['title'] = 'Halaman Gallery';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header2', $data);
        $this->load->view('member/pages/gallery', $data);
        $this->load->view('templates/footer');
    }
    
    public  function Gallerydetail($id)
    {
            $data['gallery'] = $this->Gallery_model->getById($id);
            $data['title'] = 'Halaman News';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header2', $data);
            $this->load->view('member/detail/galery', $data);
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
            $data['title'] = 'Halaman Member';
            $data['user'] = $this->db->get_where('user', ['username' => 
            $this->session->userdata('username')])->row_array();
            $this->load->view('templates/header2',$data);
            $this->load->view('member/pages/divisiMember', $data);
            $this->load->view('templates/footer');
    }

    public function pdf($id)
    {
        $data['nama'] = $this->Card_model->detail($id);
        $this->load->view('admin/pages/pdf', $data);
    }

    public function landing()
    {
        $data['gallery'] = $this->Gallery_model->index();
        $data['news'] = $this->News_model->index();
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('member/landing', $data);
    }


}


?>