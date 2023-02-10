<?php 

class Divisi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Divisi_model');
        $this->load->library('form_validation');
    }
    
    public  function index(){
        $data['divisi'] = $this->Divisi_model->index();
        $data['title'] = 'Halaman Admin';
        $data['user'] = $this->db->get_where('user', ['username' => 
        $this->session->userdata('username')])->row_array();
        $this->load->view('templates/header',$data);
        $this->load->view('admin/pages/divisi', $data);
        $this->load->view('templates/footer');
    }

    public function insert(){

        $this->form_validation->set_rules('nama', 'Nama', 'required');

            if( $this->form_validation->run() == false){
                $data['title'] = 'Halaman Admin';
                $data['user'] = $this->db->get_where('user', ['username' => 
                $this->session->userdata('username')])->row_array();
                $this->load->view('templates/header',$data);
                $this->load->view('admin/insertForm/divisi');
                $this->load->view('templates/footer');
            } else {
                $this->Divisi_model->insert();
                redirect('divisi');
            }

    }

    

}

?>