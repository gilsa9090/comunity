<?php 

class Card extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DivisiMember_model');
        $this->load->model('Card_model');
        $this->load->library('Pdf');
    }

    public function pdf($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $data['nama'] = $this->Card_model->users($id);
        $this->load->view('admin/pages/pdf', $data);
    }

    
}


?>