<?php 


class Member extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Halaman Member';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('member/dashboard', $data);
        $this->load->view('templates/footer');
    }

}


?>