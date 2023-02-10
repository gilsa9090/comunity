<?php 

class Anggota extends CI_Controller 
{
    public  function index(){
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('pages/anggota');
        $this->load->view('templates/footer');
    }
}



?>
